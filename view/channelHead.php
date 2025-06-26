/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<!-- users_id = <?php echo $user_id; ?> -->
<?php
include $global['systemRootPath'] . 'plugin/YouPHPFlix2/view/modeFlixHead.php';
?>
<link href="<?php echo getURL('plugin/YouPHPFlix2/view/css/style.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo getURL('plugin/Gallery/style.css'); ?>" rel="stylesheet" type="text/css"/>
<style>
    .galleryVideo {
        padding-bottom: 10px;
    }
    #bigVideoCarousel{
        height: auto;
    }
    .posterDetails {
        padding: 10px !important;
    }
    .modeFlixContainer{
        padding: 0;
    }
    .topicRow{
        margin: 0;
    }
    #loading{
        display: none;
    }
    .topicRow h2{
        display: none;
    }
    #channelHome #bigVideo{
        margin-bottom: 0 !important;
    }
</style>