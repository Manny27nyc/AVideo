/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$_REQUEST['live_servers_id'] = Live::getLiveServersIdRequest();
$poster = Live::getPosterImage($livet['users_id'], $_REQUEST['live_servers_id'], @$_REQUEST['live_schedule']);
$posterURL = $global['webSiteRootURL'] . $poster . '?' . filectime($global['systemRootPath'] . $poster);
?>
<link href="<?php echo getURL('plugin/Live/view/live.css'); ?>" rel="stylesheet" type="text/css"/>
<?php
$playerSkinsObj = AVideoPlugin::getObjectData("PlayerSkins");
$isLive = 1;
?>
<!-- Live -->
<?php
$htmlMediaTag = '<video poster="' . $posterURL . '" controls playsinline webkit-playsinline="webkit-playsinline" 
                       class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered liveVideo vjs-16-9" 
                       id="mainVideo">
                    <source src="' . Live::getM3U8File($uuid) . '" type="application/x-mpegURL">
                </video>';

$htmlMediaTag .= getLiveUsersLabelHTML();
echo PlayerSkins::getMediaTag(false, $htmlMediaTag);
?>
<!-- Live finish -->
<script>
<?php
echo PlayerSkins::getStartPlayerJS();
?>
</script>
