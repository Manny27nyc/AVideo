/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once '../../../videos/configuration.php';

header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->sectionsSaved = array();
$obj->namesSaved = array();

if(!User::isAdmin()){
    $obj->msg = "Must be admin";
    die(json_encode($obj));
}

$gallery = AVideoPlugin::loadPlugin('Gallery', true);

if(!empty($_REQUEST['sections'])){
    $object = $gallery->getDataObject();
    foreach ($_REQUEST['sections'] as $key => $value) {
        $obj->sectionsSaved[] = array($key=>$value);
        eval("\$object->{$value}Order = \$key;");
    }
    $obj->error = !$gallery->setDataObject($object);
}else if(!empty ($_REQUEST['name'])){
    $isChecked = true;
    if(empty($_REQUEST['isChecked']) || $_REQUEST['isChecked'] == 'false'){
        $isChecked = false;
    }
    $obj->namesSaved[] = array($_REQUEST['name']=>$isChecked);
    $gallery->setDataObjectParameter($_REQUEST['name'], $isChecked);
}

$obj->error = false;
die(json_encode($obj));