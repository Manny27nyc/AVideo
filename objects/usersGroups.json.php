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
require_once $global['systemRootPath'] . 'objects/userGroups.php';
header('Content-Type: application/json');
$rows = UserGroups::getAllUsersGroups();
$total = UserGroups::getTotalUsersGroups();
$json = json_encode($rows);
if (json_last_error()) {
    _error_log("users.json error 1: " . print_r($rows, true));
    $rows = object_to_array($rows);
    //echo examineJSONError($users);exit;
    array_walk_recursive($rows, function (&$item) {
        if (is_string($item)) {
            $item = cleanString($item);
        }
    });
    $json = json_encode($rows);
}
echo '{  "current": '. getCurrentPage().',"rowCount": '. getRowCount().', "total": '.$total.', "rows":'. $json.'}';
