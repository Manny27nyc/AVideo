/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$playlists_id = intval(@$_REQUEST['playlists_id_live']);
if(empty($playlists_id)){
    return "";
}
?>
<span id="epg"></span>
<script>
    $(document).ready(function () {
        $("#epg").closest(".row").prepend("<div class='col-sm-12 watch8-action-buttons' id='epgLine' style='display:none;'></div>");
        
        $.ajax({
            url: '<?php echo PlayLists::getLiveEPGLink($playlists_id); ?>',
            success: function (response) {
                $("#epgLine").html(response);
                $("#epgLine").slideDown();
            }
        });
    });
</script>