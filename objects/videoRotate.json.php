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
require_once $global['systemRootPath'] . 'objects/functions.php';
if (!User::canUpload() || empty($_POST['id'])) {
    die('{"error":"'.__("Permission denied").'"}');
}

$type = !empty($_POST['type']) ? $_POST['type'] : "";

require_once 'video.php';

$obj = new Video("", "", $_POST['id']);
if (empty($obj)) {
    croak(["error" => "Video not found"]);
}

$currentRotation = $obj->getRotation();
$newRotation = $currentRotation;
$status = ["success" => "video rotated"];

switch ($type) {
case 'left':
    $newRotation = ($currentRotation - 90) % 360;
    $status["rotation"] = $newRotation;
    $obj->setRotation($newRotation);
    break;
case 'right':
    $newRotation = ($currentRotation + 90) % 360;
    $status["rotation"] = $newRotation;
    $obj->setRotation($newRotation);
    break;
default:
    $status = ["error" => "I don't know how to rotate '{$type}'"];
    break;
}

status($status);
