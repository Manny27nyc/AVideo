/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
session_write_close();
header('Content-Type: application/json');
$name = "advancedCustom.json.php";
$obj = ObjectYPT::getCache($name, 60);
if(empty($obj)){
    $obj = AVideoPlugin::getObjectData("CustomizeAdvanced");
    ObjectYPT::setCache($name, $obj);
}
echo json_encode($obj);