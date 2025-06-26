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
if (!Permissions::canAdminUserGroups()) {
    die('{"error":"' . __("Permission denied") . '"}');
}

require_once 'userGroups.php';
$obj = new UserGroups(@$_POST['id']);
$obj->setGroup_name($_POST['group_name']);

if ($groups_id = $obj->save()) {
    if (User::isAdmin()) {
        Users_groups_permissions::deleteAllFromGroup($groups_id);
        if (!empty($_REQUEST['permissions']) && is_array($_REQUEST['permissions'])) {
            foreach ($_REQUEST['permissions'] as $key=>$value) {
                if (!is_array($value)) {
                    continue;
                }
                foreach ($value as $value2) {
                    Users_groups_permissions::add($key, $groups_id, $value2);
                }
            }
        }
    }
}

echo '{"status":"' . $groups_id . '"}';
