/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/LiveLinks/Objects/LiveLinksTable.php';
header('Content-Type: application/json');

if(!User::isLogged()){
    die('{"data": []}');
}

$users_id = 0;
if(!User::isAdmin()){
    $users_id = User::getId();
}

$rows = LiveLinksTable::getAll($users_id);
?>
{"data": <?php echo json_encode($rows); ?>}