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

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->walletBalance = 0;

if (!User::isAdmin()) {
    $obj->msg = ("Is not admin");
    die(json_encode($obj));
}
$plugin = AVideoPlugin::loadPluginIfEnabled("YPTWallet");
if(empty($plugin)){
    $obj->msg = ("Plugin not enabled");
    die(json_encode($obj));
}
if(empty($_POST['users_id'])){
    $obj->msg = ("User Not defined");
    die(json_encode($obj));
}

$_POST['balance'] = floatval($_POST['balance']);

header('Content-Type: application/json');

$resp = $plugin->saveBalance($_POST['users_id'], $_POST['balance']);
$obj->error = false;
$obj->walletBalance = $plugin->getBalanceFormated(User::getId());

echo json_encode($obj);