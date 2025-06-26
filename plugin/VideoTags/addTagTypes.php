/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');
require_once '../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/VideoTags/Objects/TagsTypes.php';

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
                                                
if(!User::isAdmin()){
    $obj->msg = "You cant do this";
    die(json_encode($obj));
}

$o = new TagsTypes(@$_POST['campId']);
$o->setName($_POST['name']);

if($id = $o->save()){
    $obj->error = false;
}

echo json_encode($obj);
