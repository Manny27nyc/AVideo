/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $global;
if (class_exists("Plugin") && empty($global['avideoEndIncluded'])) {
    AVideoPlugin::getEnd();
}
$global['avideoEndIncluded'] = 1;
