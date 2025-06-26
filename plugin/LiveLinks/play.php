/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
$p = AVideoPlugin::loadPluginIfEnabled("LiveLinks");
if(empty($p)){
    forbiddenPage('Plugin is disabled');
}

if (!User::canStream()) {
    forbiddenPage('You cannot stream');
}

if (empty($_REQUEST['url'])) {
    forbiddenPage('URL is empty');
}

$users_id = User::getId();

$title = Live::getTitleFromUsers_Id($users_id);

$url = LiveLinks::getDinamicVideoLink($_REQUEST['url'], $title, $users_id);

header('Location: '.$url);