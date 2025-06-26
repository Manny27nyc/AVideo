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

if (!User::isLogged()) {
    gotToLoginAndComeBackHere('');
}

$channelArtRelativePath = User::getBackgroundURLFromUserID(User::getId());

$finalWidth = 2560;
$finalHeight = 1440;

$screenWidth = 1024;
$screenHeight = 576;

$factorW = $screenWidth / $finalWidth;
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo __("Channel Art"); ?></title>
        <?php
        include $global['systemRootPath'] . 'view/include/head.php';
        ?>
    </head>
    <body class="<?php echo $global['bodyClass']; ?>">
        <?php
        include $global['systemRootPath'] . 'view/include/navbar.php';
        ?>
        <div class="container">
            <br>    
            <?php
            include $global['systemRootPath'] . 'view/userChannelArtUploadInclude.php';
            ?>
        </div><!--/.container-->
        <?php
        include $global['systemRootPath'] . 'view/include/footer.php';
        ?>
    </body>
</html>
