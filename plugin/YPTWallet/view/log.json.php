/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
if (empty($global['systemRootPath'])) {
    $global['systemRootPath'] = '../../../';
}
require_once $global['systemRootPath'] . 'videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/YPTWallet/Objects/Wallet_log.php';
if (!User::isLogged()) {
    header("Location: {$global['webSiteRootURL']}?error=" . __("You can not do this"));
    exit;
}

if(!empty($_GET['users_id']) && User::isAdmin()){
    $users_id = $_GET['users_id'];
}else{
    $users_id = User::getId();
}

header('Content-Type: application/json');

if(!empty($_POST['sort']['valueText'])){
    $_POST['sort']['value'] = $_POST['sort']['valueText'];
    unset($_POST['sort']['valueText']);
}else if(!empty($_POST['sort']['created'])){
    $_POST['sort']['id'] = 'DESC';
}

$row = WalletLog::getAllFromUser($users_id);
$total = WalletLog::getTotalFromUser($users_id);
echo '{  "current": '.$_POST['current'].',"rowCount": '.$_POST['rowCount'].', "total": '.$total.', "rows":'. json_encode($row).'}';