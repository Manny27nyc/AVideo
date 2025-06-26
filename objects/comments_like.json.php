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
require_once $global['systemRootPath'] . 'objects/comments_like.php';
header('Content-Type: application/json');

if (!empty($_GET['user']) && !empty($_GET['pass'])) {
    $user = new User(0, $_GET['user'], $_GET['pass']);
    $user->login(false, true);
}
if (empty($_POST['comments_id']) && !empty($_GET['comments_id'])) {
    $_POST['comments_id'] = $_GET['comments_id'];
}

$like = new CommentsLike($_GET['like'], $_POST['comments_id']);
echo json_encode(CommentsLike::getLikes($_POST['comments_id']));
