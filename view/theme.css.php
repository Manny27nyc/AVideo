/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
header("Content-type: text/css; charset: UTF-8");
$theme = getCurrentTheme();
_mysql_close();
session_write_close();
echo "/* theme = {$theme} */".PHP_EOL;
echo file_get_contents("{$global['systemRootPath']}view/css/custom/{$theme}.css");
exit;
/*
$filename = "{$global['systemRootPath']}videos/cache/custom.css";
if(file_exists($filename)){
    echo file_get_contents($filename);
}
 *
 */
