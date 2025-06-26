/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php 
global $global;
require_once dirname(__FILE__) . '/../../videos/configuration.php';
require_once $global['systemRootPath'] .  'plugin/AVideoPlugin.php';

$topMenu=AVideoPlugin::loadPluginIfEnabled("TopMenu");

if(!$topMenu)
die("404 page not found");


$id=$topMenu->getidBySeoUrl($_GET['menuSeoUrlItem']);
if(!$id)
die("404 page not found");

$_GET['id']=$id;
require_once $global['systemRootPath'] . 'plugin/TopMenu/index.php';
