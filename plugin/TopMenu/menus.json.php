/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/TopMenu/Objects/Menu.php';
header('Content-Type: application/json');

if(empty($_POST['sort'])){
    $_POST['sort'] = array('menu_order'=>"ASC");
}
$menu = Menu::getAll();
?>
{"data": <?php echo json_encode($menu); ?>}