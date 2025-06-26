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
require_once $global['systemRootPath'] . 'objects/user.php';

if (!empty($advancedCustomUser->afterLogoffGoToMyChannel)) {
    $redirectUri = User::getChannelLink();
} elseif (!empty($advancedCustomUser->afterLogoffGoToURL)) {
    $redirectUri = $advancedCustomUser->afterLogoffGoToURL;
} else {
    $redirectUri = $global['webSiteRootURL'];
}

User::logoff();
Category::clearCacheCount();
header("location: {$redirectUri}");
exit;
