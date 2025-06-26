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
$obj->msg = "";
$obj->token = null;

if(empty($_REQUEST['token'])){
    $obj->msg = "Token is empty";
    die(json_encode($obj));
}

$obj->token = decryptString($_REQUEST['token']);
if(empty($obj->token)){
    $obj->msg = "Token is invalid";
    die(json_encode($obj));
}

$obj->error = false;
die(json_encode($obj));