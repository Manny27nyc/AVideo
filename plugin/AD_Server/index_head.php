/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$plugin = AVideoPlugin::loadPluginIfEnabled('AD_Server');
$ad_server_location = AVideoPlugin::loadPluginIfEnabled('AD_Server_Location');
?>
<link rel="stylesheet" type="text/css" href="<?php echo getCDN(); ?>view/css/DataTables/datatables.min.css"/>
<link href="<?php echo getCDN(); ?>view/js/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

<style>
    #campaignVideosTable td img {
        height: 50px;
        margin: 5px;
    }
    .ui-autocomplete{
        z-index: 9999999;
    }
</style>