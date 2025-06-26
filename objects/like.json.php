/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/like.php';
require_once $global['systemRootPath'] . 'objects/user.php';
header('Content-Type: application/json');

if (!empty($_GET['user']) && !empty($_GET['pass'])) {
    $user = new User(0, $_GET['user'], $_GET['pass']);
    $user->login(false, true);
}
if (empty($_POST['videos_id']) && !empty($_GET['videos_id'])) {
    $_POST['videos_id'] = $_GET['videos_id'];
}

$like = new Like($_GET['like'], $_POST['videos_id']);
echo json_encode(Video::getVideoLikes($_POST['videos_id']));
