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
session_write_close();
if (!User::isLogged()) {
    die();
}
require_once $global['systemRootPath'] . 'objects/playlist.php';
header('Content-Type: application/json');
$row = PlayList::getAllFromUser(User::getId(), false);
foreach ($row as $key => $value) {
    foreach ($row[$key]['videos'] as $key2 => $value2) {
        unset($row[$key]['videos'][$key2]['description']);
    }
}
echo json_encode($row);
