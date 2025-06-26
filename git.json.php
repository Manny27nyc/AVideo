/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
header('Content-Type: application/json');
$cmd = "git log -1";
exec($cmd . "  2>&1", $output, $return_val);

$obj = new stdClass();

$obj->output = $output;

foreach ($output as $value) {
    preg_match("/Date:(.*)/i", $value, $match);
    if (!empty($match[1])) {
        $obj->date = strtotime($match[1]);
        $obj->dateString = trim($match[1]);
        $obj->dateMySQL = date("Y-m-d H:i:s", $obj->date);
    }
}

echo json_encode($obj);
