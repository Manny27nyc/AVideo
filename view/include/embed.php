/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$playerSkinsObj = AVideoPlugin::getObjectData("PlayerSkins");
$isVideoTypeEmbed = 1;
?>
<!-- Embed -->
<?php
echo PlayerSkins::getMediaTag($video['filename']);
?>
<!-- Embed finish -->
<?php
include $global['systemRootPath'] . 'plugin/PlayerSkins/contextMenu.php';
?>
