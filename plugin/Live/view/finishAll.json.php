/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once '../../../videos/configuration.php';

header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;
$obj->msg = "";

$objP = AVideoPlugin::getDataObjectIfEnabled('Live');
if (empty($objP)) {
    $obj->msg = __('Live plugin is disabled');
    die(json_encode($obj));
}

if (!User::isAdmin()) {
    $obj->msg = __('Not Admin');
    die(json_encode($obj));
}
if (!empty($_REQUEST['all'])) {
    $obj->error = !LiveTransmitionHistory::finishALL();
    if (empty($obj->error)) {
        $obj->msg = __('All lives were marked as finished');
    }
} else {
    $obj->error = false;
    $obj->finished = LiveTransmitionHistory::finishALLOffline();
    $obj->msg = count($obj->finished).' '.__('Lives finished');
}

die(json_encode($obj));
