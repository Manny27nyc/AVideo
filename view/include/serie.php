/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $isSerie;
$isSerie = 1;
$playerSkinsObj = AVideoPlugin::getObjectData("PlayerSkins");
?>
<!-- Serie -->
<?php
echo PlayerSkins::getMediaTag($video['filename']);
?>
<!-- Serie finish -->
<?php
include $global['systemRootPath'] . 'plugin/PlayerSkins/contextMenu.php';
?>
