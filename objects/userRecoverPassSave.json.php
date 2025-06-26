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
$obj = new stdClass();
if (empty($_POST['user']) || empty($_POST['recoverPassword']) || empty($_POST['newPassword']) || empty($_POST['newPasswordConfirm'])) {
    $obj->error = __("There is missing data to recover your password");
    die(json_encode($obj));
}
$user = new User(0, $_POST['user'], false);
if (empty($user)) {
    $obj->error = __("User not found");
    die(json_encode($obj));
} elseif ($user->getRecoverPass() !== $_POST['recoverPassword']) {
    $obj->error = __("Recover password does not match");
    die(json_encode($obj));
} elseif ($_POST['newPassword'] !== $_POST['newPasswordConfirm']) {
    $obj->error = __("Confirmation password does not match");
    die(json_encode($obj));
} else {
    $user->setPassword($_POST['newPassword']);
    $user->setRecoverPass(true);
    if ($user->save()) {
        $obj->success = __("Your Password has been set");
        die(json_encode($obj));
    }
}
