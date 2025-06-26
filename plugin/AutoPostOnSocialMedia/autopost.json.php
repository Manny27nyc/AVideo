/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
header('Content-Type: application/json');
        
$obj = new stdClass();
$obj->error = true;
$obj->msg = '';

$objAutoPostOnSocialMedia = AVideoPlugin::getDataObjectIfEnabled('AutoPostOnSocialMedia');
if(empty($objAutoPostOnSocialMedia)){
    $obj->msg = 'Plugin disabled';
    die(json_encode($obj));
}

if(!isCommandLineInterface() && !User::isAdmin() && !isTokenValid($_REQUEST['token'])){
    $obj->msg = 'Forbbiden';
    die(json_encode($obj));
}
$video = AutoPostOnSocialMedia::getRandomVideo();

$obj->video = $video;
if(empty($obj->video)){
    $obj->msg = 'Invalid video';
    die(json_encode($obj));
}

$_REQUEST['videos_id'] = $obj->video['id'];


require_once $global['systemRootPath'] . 'plugin/AutoPostOnSocialMedia/post.json.php';

        