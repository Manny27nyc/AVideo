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

if (!User::isAdmin()) {
    die("Admin only");
}

$users = [];
$sql = "SELECT id, user, name, email, status, created, isAdmin FROM users";
if ($result = $global['mysqli']->query($sql)) {
    while ($p = $result->fetch_assoc()) {
        $groups = UserGroups::getUserGroups($p['id']);
        $groupsName = [];
        foreach ($groups as $value) {
            $groupsName[] = $value['group_name'];
        }
        $p['groups'] = implode(', ', $groupsName);
        $users[] = $p;
    }
}
$output = fopen("php://output", 'w') or die("Can't open php://output");
header("Content-Type:application/csv");
header("Content-Disposition:attachment;filename=email.csv");
fputcsv($output, ['id', 'user', 'name', 'email', 'status', 'created', 'isAdmin', 'Groups']);
foreach ($users as $user) {
    fputcsv($output, $user);
}
fclose($output) or die("Can't close php://output");
