/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once  '../../../plugin/LoginControl/pgp/functions.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = '';
$obj->public = '';
$obj->private = '';


$pass = @$_REQUEST['keyPassword'];
$name = @$_REQUEST['keyName'];
$email = @$_REQUEST['keyEmail'];
$UserIDPacket = "{$name} <{$email}>";

$keys = createKeys($UserIDPacket, $pass);

if (!empty($keys['public']) && !empty($keys['private'])) {
    $obj->error = false;
    $obj->public = $keys['public'];
    $obj->private = $keys['private'];
}
die(json_encode($obj));
