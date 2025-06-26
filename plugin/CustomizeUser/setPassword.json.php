/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = '';

if (!User::isAdmin()) {
    $obj->msg = ('Must be admin');
    die(json_encode($obj));
}
$users_id = intval(@$_REQUEST['users_id']);
if (empty($users_id)) {
    $obj->msg = ('Empty users_id');
    die(json_encode($obj));
}

$obj->ProfilePassword = intval(@$_REQUEST['ProfilePassword']);
$obj->users_id = $users_id;

$obj->response = User::setProfilePassword($users_id, $obj->ProfilePassword) ;

$obj->error = empty($obj->response);

die(json_encode($obj));
