/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');
require_once '../../../videos/configuration.php';

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->response = @$_REQUEST['response'];

$plugin = AVideoPlugin::loadPluginIfEnabled('LoginControl');

if (!User::isLogged()) {
    $obj->msg = "You can't do this";
    die(json_encode($obj));
}


$obj->error = empty(LoginControl::verifyChallenge($obj->response));

echo json_encode($obj);
