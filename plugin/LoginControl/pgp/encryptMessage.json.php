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
$obj->textEncrypted = '';

$encMessage = encryptMessage(@$_REQUEST['textToEncrypt'], @$_REQUEST['publicKeyToEncryptMsg']);
if (!empty($encMessage["encryptedMessage"])) {
    $obj->error = false;
    $obj->textEncrypted = $encMessage["encryptedMessage"];
}

die(json_encode($obj));
