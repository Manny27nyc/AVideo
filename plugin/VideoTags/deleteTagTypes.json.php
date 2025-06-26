/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/VideoTags/Objects/TagsTypes.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;

if(!User::isAdmin()){
    $obj->msg = "You cant do this";
    die(json_encode($obj));
}

$id = intval($_POST['id']);
$row = new TagsTypes($id);
$obj->error = !$row->delete();
die(json_encode($obj));
?>