/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// gettig the mobile submited value
if (empty($_POST) && !empty($_GET)) {
    foreach ($_GET as $key => $value) {
        $_POST[$key]=$value;
    }
}
require_once 'subscribe.php';
header('Content-Type: application/json');
$obj = new stdClass();
$obj->error = '';
$obj->subscribe = '';
if (!User::isLogged()) {
    $obj->error = "Must be logged";
    die(json_encode($obj));
}

$_POST['email'] = User::getEmail_();
if (empty($_POST['user_id'])) {
    $obj->error = __("User can not be blank");
    die(json_encode($obj));
}
$subscribe = new Subscribe(0, $_POST['email'], $_POST['user_id'], User::getId());
$subscribe->notifyToggle();
$obj->notify = $subscribe->getNotify();
die(json_encode($obj));
