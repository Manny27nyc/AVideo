/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//streamer config
require_once '../videos/configuration.php';
AVideoPlugin::loadPlugin('YPTStorage');
if (!isCommandLineInterface()) {
    return die('Command Line only');
}
error_reporting(E_ALL);
ini_set('display_errors', '1');
$filename = '_YPTuniqid_5f80cfc9990a82.31784835';
$size = YPTStorage::getUsageFromFilename($filename);
var_dump($size, humanFileSize($size));
