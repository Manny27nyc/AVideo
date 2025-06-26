/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/Live/Objects/Live_restreams.php';
header('Content-Type: application/json');

if (!User::canStream()) {
    die('{"data": []}');
}

if (empty($_GET['users_id'])) {
    if (!User::isAdmin()) {
        $_GET['users_id'] = User::getId();
    }
}

if (empty($_GET['users_id'])) {
    $rows = Live_restreams::getAll();
} else {
    $rows = Live_restreams::getAllFromUser($_GET['users_id'], "");
}


?>
{"data": <?php echo json_encode($rows); ?>}