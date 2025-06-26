/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once '../../videos/configuration.php';
$pobj = AVideoPlugin::getDataObject("Live");

if (empty($_REQUEST['key'])) {
    die("We need a Key");
}
if (!User::isAdmin()) {
    die("Login as Admin first");
}
//header('Content-Type: application/json');

$row = LiveTransmition::keyExists($_REQUEST['key']);

if (!empty($row)) {
    if (empty($_REQUEST['json'])) {
        foreach ($row as $key => $value) {
            echo "<b>{$key}</b> {$value}<br>";
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode($row);
    }
} else {
    echo "Key not found";
}

//echo json_encode($row);
