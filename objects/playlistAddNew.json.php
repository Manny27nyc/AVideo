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
require_once $global['systemRootPath'] . 'objects/playlist.php';

$plugin = AVideoPlugin::loadPluginIfEnabled("PlayLists");

if (empty($plugin)) {
    die('{"error":"Plugin not enabled"}');
}
if (!User::isLogged()) {
    die('{"error":"'.__("Permission denied").'"}');
}
if (empty($_POST['name'])) {
    die('{"error":"'.__("Name can't be blank").'"}');
}
$obj = new PlayList(@$_POST['id']);
$obj->setName($_POST['name']);
$obj->setStatus($_POST['status']);
echo '{"status":"'.$obj->save().'"}';
