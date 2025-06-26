/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

header('Content-Type: application/json');
if (!isset($global['systemRootPath'])) {
    $configFile = '../../videos/configuration.php';
    if (file_exists($configFile)) {
        require_once $configFile;
    }
}
if(!User::isAdmin()){
    forbiddenPage("Not admin");
}
$permissions = array();
if($_REQUEST['plugins_id']){
    $obj = AVideoPlugin::getObjectDataIfEnabled("Permissions");
    $permissions = Users_groups_permissions::getAllFromPlugin($_REQUEST['plugins_id']);
}
die(json_encode($permissions));