/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//streamer config
require_once '../videos/configuration.php';

if (!isCommandLineInterface()) {
    return die('Command Line only');
}
$global['rowCount'] = 99999;
$total = Video::getTotalVideos("", false, true, true, false, false);
$videos = Video::getAllVideosLight("", false, true, false);
$count = 0;
foreach ($videos as $value) {
    $count++;
    $updated = Video::updateFilesize($value['id']);
    echo "{$count}/{$total} (".($updated ? "success" : "fail").") [{$value['id']}] {$value['title']}".PHP_EOL;
    ob_flush();
}

die();
