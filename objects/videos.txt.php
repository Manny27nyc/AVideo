/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
error_reporting(0);
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/video.php';
require_once $global['systemRootPath'] . 'objects/functions.php';
header('Content-type: text/plain');
$showOnlyLoggedUserVideos = true;
if (Permissions::canModerateVideos()) {
    $showOnlyLoggedUserVideos = false;
}
$videos = Video::getAllVideosLight('', $showOnlyLoggedUserVideos, false);
foreach ($videos as $key => $value) {
    if (empty($_GET['type'])) {
        echo Video::getPermaLink($videos[$key]['id']);
    } else {
        echo Video::getURLFriendlyFromCleanTitle($videos[$key]['clean_title']);
    }
    echo PHP_EOL;
}
