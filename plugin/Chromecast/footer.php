/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>
<script>
    window.SILVERMINE_VIDEOJS_CHROMECAST_CONFIG = {
        preloadWebComponents: true,
    };
</script>
<script src="<?php echo getCDN(); ?>plugin/Chromecast/videojs-chromecast/silvermine-videojs-chromecast.js" type="text/javascript"></script>
<script>
    <?php
    echo PlayerSkins::getStartPlayerJS('player.chromecast();',",controls: true,techOrder: ['chromecast', 'html5'], plugins: {chromecast: {}}");
    ?>
</script>