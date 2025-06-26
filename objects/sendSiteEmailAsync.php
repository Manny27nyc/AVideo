/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//streamer config
require_once dirname(__FILE__) . '/../videos/configuration.php';

_error_log('sendSiteEmailAsync: Start');
if (!isCommandLineInterface()) {
    _error_log('sendSiteEmailAsync: ERROR: command line only');
    return die('Command Line only');
}

$tmpFile = @$argv[1];
if (empty($tmpFile)) {
    _error_log('sendSiteEmailAsync: ERROR: empty argument');
    die('sendSiteEmailAsync empty argument');
}
if (!file_exists($tmpFile)) {
    _error_log('sendSiteEmailAsync: ERROR: file do not exists '.$tmpFile);
    die('sendSiteEmailAsync file do not exists '.$tmpFile);
}
$json = _json_decode(file_get_contents($tmpFile));
unlink($tmpFile);
if (empty($json)) {
    _error_log('sendSiteEmailAsync: ERROR JSON invalid');
    die('sendSiteEmailAsync JSON invalid');
}
$to = ($json->to);
$subject = ($json->subject);
$message = ($json->message);

sendSiteEmail($to, $subject, $message);
_error_log('sendSiteEmailAsync: Complete');
