/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/Permissions/Objects/Users_groups_permissions.php';
header('Content-Type: application/json');

$rows = Users_groups_permissions::getAll();
?>
{"data": <?php echo json_encode($rows); ?>}