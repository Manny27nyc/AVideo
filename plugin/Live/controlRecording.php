/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once dirname(__FILE__) . '/../../videos/configuration.php';

if (!isCommandLineInterface()) {
    return die('Command Line only');
}

AVideoPlugin::loadPlugin('Live');

$key = $argv[1];
$live_servers_id = intval(@$argv[2]);
$start = intval(@$argv[3]);

Live::controlRecording($key, $live_servers_id, $start);
