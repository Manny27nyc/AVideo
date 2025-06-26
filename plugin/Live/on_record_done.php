/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once '../../videos/configuration.php';
require_once '../AVideoPlugin.php';
_error_log("on_record_done start");
$plugin = AVideoPlugin::loadPluginIfEnabled('SendRecordedToEncoder');
if ($plugin) {
    _error_log("on_record_done SendRecordedToEncoder");
    $plugin->on_record_done();
}
_error_log("on_record_done end");
