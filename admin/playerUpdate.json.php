/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/user.php';
if (!User::isAdmin()) {
    die('{"error":"' . __("Permission denied") . '"}');
}

$pluginName = 'PlayerSkins';

$pluginDO = AVideoPlugin::getObjectData($pluginName);
$pluginDB = Plugin::getOrCreatePluginByName($pluginName, 'active');

$pluginDO->skin = $_POST['skin'];

$p = new Plugin($pluginDB['id']);
$p->setObject_data(json_encode($pluginDO));

$obj = new stdClass();
$obj->save = $p->save();

echo(json_encode($obj));
