/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
header('Content-Type: application/json');

$obj = new stdClass();
$obj->password = @$_REQUEST['pass'];
$obj->encryptedPassword=encryptPassword($obj->password);

echo json_encode($obj);
