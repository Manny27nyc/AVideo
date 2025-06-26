/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 3000); // 60 minutes
header('Content-Type: application/json');
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
session_write_close();
$obj = new stdClass();
$obj->msg = '';
$obj->error = true;


if (!Permissions::canModerateVideos()) {
    $obj->msg = __("Permission denied");
    die(json_encode($obj));
}

$videos = Video::getAllVideosLight("", false, true, false);

foreach ($videos as $value) {
    Video::updateFilesize($value['id']);
}

$obj->error = false;
die(json_encode($obj));
