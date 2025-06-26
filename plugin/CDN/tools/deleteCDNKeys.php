/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$config = dirname(__FILE__) . '/../../../videos/configuration.php';
require_once $config;

if (!isCommandLineInterface()) {
    return die('Command Line only');
}
ob_end_flush();
$isCDNEnabled = AVideoPlugin::isEnabledByName('CDN');

if (empty($isCDNEnabled)) {
    return die('Plugin disabled');
}

require_once './functions.php';

set_time_limit(300);
ini_set('max_execution_time', 300);

getConnID(0);
/*
$list = ftp_mlsd_recursive($conn_id[0], "/{$CDNObj->storage_username}/");
var_dump($list);
*/

$index = intval(@$argv[1]);

$list = ftp_rawlist($conn_id[0], "/{$CDNObj->storage_username}/", true);
for ($i=$index;$i<count($list);$i++) {
    $value = $list[$i];
    $parts = explode(' ', $value);
    $dir = end($parts);

    //echo $value.PHP_EOL;exit;
    echo $i.' Searching '."/{$CDNObj->storage_username}/{$dir}/".PHP_EOL;
    $files = ftp_rawlist($conn_id[0], "/{$CDNObj->storage_username}/{$dir}/", true);
    foreach ($files as $file) {
        trim($file);
        if (preg_match('/enc_[0-9a-z]+.key$/i', $file)) {
            $parts = explode(' ', $file);
            $file = end($parts);
            $file = "/{$CDNObj->storage_username}/{$dir}/{$file}";
            echo '******** Delete '.$file.PHP_EOL;
            ftp_delete($conn_id[0], $file);
        }
    }
}
