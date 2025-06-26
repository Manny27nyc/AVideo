/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
header("Content-Type: text/plain");
$content = file_get_contents('avideoLogin.php');
echo str_replace('{webSiteRootURL}', "{$global['webSiteRootURL']}", $content);
?>