/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}

header('Content-Type: application/json');
?>
Sitemap: <?php echo $global['webSiteRootURL']; ?>sitemap.xml
User-Agent: *
<?php echo $advancedCustom->robotsTXT->value; ?>