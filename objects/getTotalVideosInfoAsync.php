/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../videos/configuration.php';
require_once $global['systemRootPath'] . 'objects/video.php';

//getTotalVideosInfo($status = "viewable", $showOnlyLoggedUserVideos = false,
//$ignoreGroup = false, $videosArrayId = array(), $getStatistcs = false)
session_write_close();
$status = $argv[1];
$showOnlyLoggedUserVideos = boolval($argv[2]);
$ignoreGroup = boolval($argv[3]);
$videosArrayId = _json_decode($argv[4]);
$getStatistcs = boolval($argv[5]);
$cacheFileName = $argv[6];
$lockFile = $cacheFileName . '.lock';
if (file_exists($lockFile)) {
    return false;
}
file_put_contents($lockFile, 1);
$total = Video::getTotalVideosInfo($status, $showOnlyLoggedUserVideos, $ignoreGroup, $videosArrayId, $getStatistcs);
file_put_contents($cacheFileName, json_encode($total));
//_error_log(__FILE__." ".$cacheFileName.": done");
unlink($lockFile);
