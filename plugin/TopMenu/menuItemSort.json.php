/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
require_once $global['systemRootPath'] . 'objects/user.php';
if (!User::isAdmin()) {
    header("Location: {$global['webSiteRootURL']}?error=" . __("You can not manager plugins"));
    exit;
}
require_once $global['systemRootPath'] . 'plugin/TopMenu/Objects/MenuItem.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->message = "";

foreach ($_POST['itens'] as $key => $value) {    
    $menu = new MenuItem($value);
    $menu->setItem_order($key+10);
    $obj->error = $menu->save();
}

echo json_encode($obj); ?>