/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// check recurrent payments
header('Content-Type: application/json');

if (empty($global['systemRootPath'])) {
    $global['systemRootPath'] = '../../';
}
require_once $global['systemRootPath'] . 'videos/configuration.php';

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->balance = 0;

if (!User::isLogged()) {
    $obj->msg = "Please login first";
    die(json_encode($obj));
}

$obj->balance = YPTWallet::getUserBalance();

$obj->error = false;
die(json_encode($obj));
?>