/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once dirname(__FILE__) . '/../../videos/configuration.php';

if (!isCommandLineInterface()) {
    die('Command Line only');
}

$daysLimit = 3;

// delete object cache
$cacheDir = ObjectYPT::getCacheDir();
if (empty($cacheDir) || !preg_match('/YPTObjectCache/', $cacheDir)) {
    die('Wrong dir: '.$cacheDir);
}
_error_log('crontab.php: '.json_encode(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)));
echo "deleting {$cacheDir}".PHP_EOL;
// delete caches 3 days old
$cmd = "find {$cacheDir}* -mtime +{$daysLimit} -type f -name \"*.cache\" -exec rm {} \;".PHP_EOL;
echo "Command: {$cmd}";
exec($cmd);

//delete site cache
$cacheDir = getCacheDir();
if (empty($cacheDir) || !preg_match('/cache/', $cacheDir)) {
    die('Wrong dir: '.$cacheDir);
}
echo "deleting {$cacheDir}".PHP_EOL;
// delete caches 3 days old
$cmd = "find {$cacheDir}* -mtime +{$daysLimit} -type f -name \"*.cache\" -exec rm {} \;".PHP_EOL;
echo "Command: {$cmd}";
exec($cmd);
