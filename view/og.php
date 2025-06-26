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
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $config->getWebSiteTitle(); ?></title>
        <?php
        getOpenGraph(@$_GET['videos_id']);
        getLdJson(@$_GET['videos_id']);
        ?>
    </head>
    <body>
    </body>
</html>
