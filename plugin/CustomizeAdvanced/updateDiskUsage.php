/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

header('Content-Type: application/json');
require_once '../../videos/configuration.php';
$obj = new stdClass();
$obj->error = true;
$obj->msg = "";


if (!User::isAdmin()) {
    $obj->msg = __("Permission denied");
    die(json_encode($obj));
}
if(empty($_POST['videos_id'])){    
    $obj->msg = __("Video Not found");
    die(json_encode($obj));
}

$obj->videos_id = intval($_POST['videos_id']);
$obj->error = empty(Video::updateFilesize($obj->videos_id));

$v = new Video('', '', $obj->videos_id);
$obj->filename = $v->getFilename();
$obj->filesize = $v->getFilesize();
$obj->filesize_human = humanFileSize($obj->filesize);

die(json_encode($obj));

