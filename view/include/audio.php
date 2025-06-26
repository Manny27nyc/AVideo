/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$playerSkinsObj = AVideoPlugin::getObjectData("PlayerSkins");
$isAudio = 1;
?>
<!-- Audio -->
<?php
echo PlayerSkins::getMediaTag($video['filename']);
?>
<!-- Audio finish -->
<?php
include $global['systemRootPath'] . 'plugin/PlayerSkins/contextMenu.php';
?>
