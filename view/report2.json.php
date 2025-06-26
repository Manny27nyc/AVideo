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
require_once $global['systemRootPath'] . 'objects/user.php';
require_once $global['systemRootPath'] . 'objects/comment.php';

session_write_close();
$from = date("Y-m-d 00:00:00", strtotime($_POST['dateFrom']));
$to = date('Y-m-d 23:59:59', strtotime($_POST['dateTo']));

// list all channels
if ($config->getAuthCanViewChart() == 0) {
    if (User::isAdmin()) {
        $users = User::getAllUsers();
    } elseif (User::isLogged()) {
        $users = [['id'=> User::getId()]];
    } else {
        $users = [];
    }
} elseif ($config->getAuthCanViewChart() == 1) {
    if ((!empty($_SESSION['user']['canViewChart']))||(User::isAdmin())) {
        $users = User::getAllUsers(true);
    }
}

$rows = [];
foreach ($users as $key => $value) {
    // list all videos on that channel
    $identification = User::getNameIdentificationById($value['id']);
    $thumbs = Comment::getTotalCommentsThumbsUpFromUser($value['id'], $from, $to);
    if (empty($thumbs['thumbsUp']) && empty($thumbs['thumbsDown'])) {
        continue;
    }
    $item = [
        'thumbsUp'=>$thumbs['thumbsUp'],
        'thumbsDown'=>$thumbs['thumbsDown'],
        'user'=>"<a href='".User::getChannelLink($value['id'])."'>{$identification}</a>",

    ];
    $rows[] = $item;
}

$obj = new stdClass();

$obj->data = $rows;

echo json_encode($obj);
