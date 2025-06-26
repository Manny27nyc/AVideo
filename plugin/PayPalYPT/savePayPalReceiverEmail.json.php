/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
session_write_close();
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
if (!User::isLogged()) {
    $obj->msg = "Not logged";
    die(json_encode($obj));
}
if (!isset($_POST['PayPalReceiverEmail'])) {
    $obj->msg = "PayPalReceiverEmail is empty";
    die(json_encode($obj));
}

$pp = AVideoPlugin::loadPluginIfEnabled('PayPalYPT');

if (empty($pp)) {
    $obj->msg = "Plugin not enabled";
    die(json_encode($obj));
}

$obj->error = false;

PayPalYPT::setUserReceiverEmail(User::getId(), $_POST['PayPalReceiverEmail']);

die(json_encode($obj));
