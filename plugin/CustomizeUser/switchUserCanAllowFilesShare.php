/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$uid = uniqid();
?>
<div class="material-switch">
    <input class="playerSwitchDefault" data-toggle="toggle" type="checkbox" value="" id="switch<?php echo $uid; ?>" <?php echo (CustomizeUser::canShareVideosFromUser($users_id)) ? "checked" : ""; ?>>
    <label for="switch<?php echo $uid; ?>" class="label-primary"></label>
</div>
<script>
    $(document).ready(function () {
        $('#switch<?php echo $uid; ?>').change(function (e) {
            modal.showPleaseWait();
            $.ajax({
                url: '<?php echo $global['webSiteRootURL']; ?>plugin/CustomizeUser/set.json.php',
                data: {"type": "userCanAllowFilesShare", "value": $('#switch<?php echo $uid; ?>').is(":checked")},
                type: 'post',
                success: function (response) {
                    modal.hidePleaseWait();
                }
            });
        });
    });
</script>