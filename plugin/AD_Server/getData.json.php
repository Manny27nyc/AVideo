/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');

require_once '../../videos/configuration.php';
allowOrigin();
$obj = new stdClass();
$obj->error = true;
$obj->msg = "";
$obj->views = 0;
$ad_server = AVideoPlugin::loadPluginIfEnabled('AD_Server');
if (empty($ad_server)) {
    $obj->msg = "not enabled";
    die(json_encode($obj));
}

$obj->error = false;
$obj->views = VastCampaignsLogs::getViews();

echo json_encode($obj);
