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
                                   
$menu = new MenuItem(@$_POST['menuItemId']);
$menu->setTopMenu_id($_POST['menuId']);
//$menu->setClass($_POST['class']);
//$menu->setImage($_POST['image']);
$menu->setItem_order($_POST['item_order']);
$menu->setStatus($_POST['item_status']);
//$menu->setStyle($_POST['style']);
$menu->setText($_POST['text']);
$menu->setTitle($_POST['title']);
$menu->setUrl($_POST['url']);
$menu->setIcon($_POST['icon']);
$menu->setMenuSeoUrlItem($_POST['menuSeoUrlItem']);

if(!empty($_POST['mobileicon'])){
    $menu->setIcon($_POST['mobileicon']);
}

$obj->error = $menu->save();

echo json_encode($obj); ?>
