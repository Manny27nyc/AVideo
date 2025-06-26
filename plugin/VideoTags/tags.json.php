/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
session_write_close();
require_once $global['systemRootPath'].'plugin/VideoTags/Objects/Tags.php';
header('Content-Type: application/json');

$rows = Tags::getAllTagsList($_GET['tags_types_id']);

die(json_encode($rows));