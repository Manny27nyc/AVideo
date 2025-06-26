/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once dirname(__FILE__) . '/../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/YPTSocket/functions.php';

if (!isCommandLineInterface()) {
    die("Command line only");
}
ob_end_flush();
$force = @$argv[1];
echo 'Restart socket server' . PHP_EOL;
if($force == 'force'){
    echo 'Kill it if need' . PHP_EOL;
    restartServer();
}else{
    echo 'Do not kill if is running' . PHP_EOL;
    restartServerIfIsDead();
}