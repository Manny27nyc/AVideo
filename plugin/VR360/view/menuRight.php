/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<li>
    <div class="material-switch navbar-text" style="width: 120px;">
        <i class="fa fa-cube"></i> VR360 &nbsp;&nbsp;
        <input id="vr360" type="checkbox" value="0" <?php if($is_enabled){ ?> checked="checked" <?php } ?>/>
        <label for="vr360" class="label-primary"></label>
    </div>
</li>
<script>
    $('#vr360').change(function () {
        modal.showPleaseWait();
        $.ajax({
            url: '<?php echo $global['webSiteRootURL']; ?>plugin/VR360/toogleVR360.php',
            method: 'POST',
            data: {
                'videos_id': <?php echo $videos_id; ?>,
                'vr360': $(this).is(":checked")
            },
            success: function (response) {
                console.log(response);
                modal.hidePleaseWait();
            }
        });
        return false;
    });
</script>