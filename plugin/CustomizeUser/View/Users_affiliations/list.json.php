/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/CustomizeUser/Objects/Users_affiliations.php';
header('Content-Type: application/json');


$users_id_company = 0;
$users_id_affiliate = 0;

if(!User::isAdmin()){
    if(User::isACompany()){
        $users_id_company = User::getId();
    }else{
        $users_id_affiliate = User::getId();
    }
}

$rows = Users_affiliations::getAll($users_id_company, $users_id_affiliate);
$total = Users_affiliations::getTotal($users_id_company, $users_id_affiliate);

?>
{"data": <?php echo json_encode($rows); ?>, "draw": <?php echo intval(@$_REQUEST['draw']); ?>, "recordsTotal":<?php echo $total; ?>, "recordsFiltered":<?php echo $total; ?>}