/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/Channel.php';
require_once $global['systemRootPath'] . 'objects/video.php';
require_once $global['systemRootPath'] . 'objects/video_statistic.php';
session_write_close();
$from = date("Y-m-d 00:00:00", strtotime($_POST['dateFrom']));
$to = date('Y-m-d 23:59:59', strtotime($_POST['dateTo']));
if ($config->getAuthCanViewChart() == 0) {
    // list all channels
    if (User::isAdmin()) {
        $users = Channel::getChannels();
    } elseif (User::isLogged()) {
        $users = [['id'=> User::getId()]];
    } else {
        $users = [];
    }
} elseif ($config->getAuthCanViewChart() == 1) {
    if ((!empty($_SESSION['user']['canViewChart']))||(User::isAdmin())) {
        $users = Channel::getChannels();
    }
}

$rows = [];
foreach ($users as $key => $value) {
    // list all videos on that channel
    $videos = Video::getAllVideos("a", $value['id']);
    $identification = User::getNameIdentificationById($value['id']);
    $views = 0;
    foreach ($videos as $key2 => $value2) {
        $views+=VideoStatistic::getStatisticTotalViews($value2['id'], false, $from, $to);
    }
    if (empty($views)) {
        continue;
    }
    $item = [
        'views'=>$views,
        'channel'=>"<a href='".User::getChannelLink($value['id'])."'>{$identification}</a>",

    ];
    $rows[] = $item;
}

$obj = new stdClass();

$obj->data = $rows;

echo json_encode($obj);
