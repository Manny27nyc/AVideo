/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
error_reporting(0);
header('Content-Type: application/json');
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/userGroups.php';
if (!User::canUpload() || empty($_POST['id'])) {
    die('{"error":"' . __("Permission denied") . '"}');
}
if (!is_array($_POST['id'])) {
    $_POST['id'] = [$_POST['id']];
}

require_once 'video.php';
$id = 0;
foreach ($_POST['id'] as $videos_id) {
    $obj = new Video("", "", $videos_id);
    if (empty($obj)) {
        die("Object not found");
    }
    if (!$obj->userCanManageVideo()) {
        $obj->msg = __("You can not Manage This Video");
        die(json_encode($obj));
    }
    if (!empty($_POST['add'])) {
        UserGroups::addVideoGroups($videos_id, $_POST['users_groups_id']);
    } else {
        UserGroups::deleteVideoGroups($videos_id, $_POST['users_groups_id']);
    }
    $resp = true;
}
echo '{"status":"' . !empty($resp) . '"}';
