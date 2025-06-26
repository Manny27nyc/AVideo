/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');

if (!isset($global['systemRootPath'])) {
    $configFile = '../../videos/configuration.php';
    if (file_exists($configFile)) {
        require_once $configFile;
    }
}
$objM = AVideoPlugin::getObjectDataIfEnabled("Meet");
//_error_log(json_encode($_SERVER));
if (empty($objM)) {
    die("Plugin disabled");
}
$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->link = "";

if (empty($_GET['roomName'])) {
    $obj->msg = "Empty Room";
    die(json_encode($obj));
}

$obj->link = Meet::getMeetRoomLink($_GET['roomName']);
if ($obj->link) {
    $obj->error = false;
}
die(json_encode($obj));
