/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//streamer config
require_once '../videos/configuration.php';
ob_end_flush();
if (!isCommandLineInterface()) {
    return die('Command Line only');
}

$path = getVideosDir();

$files = array_diff(scandir($path), ['.', '..']);
foreach ($files as $value) {
    $dir = "{$path}{$value}";
    if (is_dir($dir)) {
        $files2 = array_diff(scandir($dir), ['.', '..']);
        foreach ($files2 as $value2) {
            $ext = pathinfo($value2, PATHINFO_EXTENSION);
            if ($ext=='tgz') {
                $file = "{$dir}/{$value2}";
                echo $file.' '. humanFileSize(filesize($file)).PHP_EOL;
                unlink($file);
            }
        }
    }
}
