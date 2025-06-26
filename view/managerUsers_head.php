/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once $global['systemRootPath'] . 'objects/userGroups.php';
$userGroups = UserGroups::getAllUsersGroups();
?>
<style>
    .usergroupsLi .dynamicLabel{
        display: none;
    }
    .usergroupsLi.dynamic .dynamicLabel{
        display: inline;
    }
    .usergroupsLi.dynamic .label-warning{
        background-color: #999;
    }
</style>