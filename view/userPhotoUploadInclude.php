/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$finalWidth = 150;
$finalHeight = 150;
$screenWidth = 150;
$caUid = 'Photo_' . uniqid();
?>
<div class="form-group" id="<?php echo $caUid; ?>">   
    <?php
    $croppie = getCroppie(__('Profile Photo'), 'userPhotoUpload', $finalWidth, $finalHeight, $screenWidth);
    echo $croppie['html'];
    ?>
</div>  
<button class="btn btn-success btn-block" type="button" onclick="<?php echo $croppie['getCroppieFunction']; ?>"><i class="fas fa-save"></i> <?php echo __('Save Profile Photo'); ?></button>
<?php

if ($vloObj = AVideoPlugin::getDataObjectIfEnabled('VideoLogoOverlay')) {
    if ($vloObj->useUserChannelImageAsLogo) {
        ?>
        <div class="alert alert-info"><?php echo __("This image will appear in your livestream"); ?></div>
        <?php
    }
}
?>
<script>
    $(document).ready(function () {
<?php
echo $croppie['restartCroppie'] . "('" . User::getPhoto(0, true) . "');";
?>
    });
    function userPhotoUpload(image) {
        modal.showPleaseWait();
        $.ajax({
            url: '<?php echo $global['webSiteRootURL'] . "objects/uploadUserPhoto.json.php"; ?>',
            data: {
                image: image
            },
            type: 'post',
            success: function (response) {
                avideoResponse(response);
                modal.hidePleaseWait();
            }
        });
    }

</script>