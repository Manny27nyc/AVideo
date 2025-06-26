/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/plugin.php';
require_once $global['systemRootPath'] . 'objects/user.php';
header('Content-Type: application/json');
$row = Plugin::getAll();
if (!User::isAdmin()) {
    foreach ($row as $key => $value) {
        if (!empty($row[$key]->installedPlugin['object_data'])) {
            $row[$key]->installedPlugin['object_data'] = '';
        }
    }
}
$total = Plugin::getTotal();
echo '{  "current": '.$_POST['current'].',"rowCount": '.$_POST['rowCount'].', "total": '.$total.', "rows":'. json_encode($row).'}';
