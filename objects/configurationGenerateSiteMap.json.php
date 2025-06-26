/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//header("Content-type: text/xml");
header('Content-Type: application/json');
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/user.php';
require_once $global['systemRootPath'] . 'objects/category.php';

$obj = new stdClass();
$obj->error = true;
$obj->msg = '';

if (!Permissions::canGenerateSiteMap()) {
    $obj->msg = __("Permission denied");
    die(json_encode($obj));
}
$sitemap = siteMap();

if (empty($sitemap)) {
    $obj->msg = "Sitemap content is empty";
    die(json_encode($obj));
}


$name = "sitemap.xml";
ObjectYPT::setCache($name, $sitemap);

$obj->error = false;
die(json_encode($obj));
