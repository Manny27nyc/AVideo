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
$obj->textDecrypted = '';
$obj->textToDecrypt = @$_REQUEST['textToDecrypt'];
$obj->privateKeyToDecryptMsg = @$_REQUEST['privateKeyToDecryptMsg'];
$obj->keyPassword = @$_REQUEST['keyPassword'];

$textDecrypted = decryptMessage($obj->textToDecrypt, $obj->privateKeyToDecryptMsg, $obj->keyPassword);
if (!empty($textDecrypted)) {
    $obj->error = false;
    $obj->textDecrypted = $textDecrypted;
}

die(json_encode($obj));
