/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once '../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/CustomizeUser/Objects/Categories_has_users_groups.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = '';
$obj->saved = 0;
$obj->users_id = User::getId();

$plugin = AVideoPlugin::loadPluginIfEnabled('CustomizeUser');

if (!User::isLogged()) {
    forbiddenPage('You need to be logged in');
}

$obj->saved = User::setDonationButtons($obj->users_id, @$_POST['donationButtonsList']);
if($obj->saved){
    $obj->error = false;
}

die(json_encode($obj));
