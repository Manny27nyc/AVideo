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
require_once $global['systemRootPath'] . 'objects/playlist.php';
if (!User::isLogged()) {
    die('{"error":"'.__("Permission denied").'"}');
}
$obj = new PlayList($_POST['playlist_id']);
if (User::getId() !== $obj->getUsers_id()) {
    die('{"error":"'.__("Permission denied").'"}');
}
$result = $obj->addVideo($_POST['video_id'], false);

echo '{"status":"'.$result.'"}';
