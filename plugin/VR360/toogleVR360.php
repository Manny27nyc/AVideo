/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/VR360/Objects/VideosVR360.php';
VideosVR360::toogleVR360($_POST['videos_id']);
