/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

header("Content-Type: video/mp2t");

if (empty($_GET['res'])) {
    $_GET['res'] = 240;
}
$_GET['res'] = intval($_GET['res']);
if ($_GET['seq']%2) {
    $filename = "res{$_GET['res']}/index1.ts";
} else {
    $filename = "res{$_GET['res']}/index0.ts";
}
echo file_get_contents($filename);
