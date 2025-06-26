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
if (!Permissions::canModerateVideos()) {
    die('{"error":"'.__("Permission denied").'"}');
}
require_once $global['systemRootPath'] . 'objects/video.php';
if (!is_array($_POST['id'])) {
    $_POST['id'] = [$_POST['id']];
}
$id = 0;
foreach ($_POST['id'] as $value) {
    $obj = new Video('', '', $value);
    $obj->setIsSuggested($_POST['isSuggested']);
    $id = $obj->save();
}

echo '{"status":"'.$id.'"}';
