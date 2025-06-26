/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
if (empty($global['systemRootPath'])) {
    $global['systemRootPath'] = '../../../';
}
require_once $global['systemRootPath'] . 'videos/configuration.php';
require_once $global['systemRootPath'] . 'objects/user.php';

if (!User::isLogged()) {
    die("Is not logged");
}
$plugin = AVideoPlugin::loadPluginIfEnabled("YPTWallet");
if(empty($plugin)){
    die("Plugin not enabled");
}

header('Content-Type: application/json');

$_POST['current'] = getCurrentPage();
$_POST['rowCount'] = getRowCount();
$users = $plugin->getAllUsers();

$total = User::getTotalUsers(true);
echo '{  "current": '.$_POST['current'].',"rowCount": '.$_POST['rowCount'].', "total": '.$total.', "rows":'. json_encode($users).'}';
