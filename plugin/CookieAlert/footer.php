/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<!-- COOKIES -->
<div class="alert alert-dismissible text-center cookiealert" role="alert">
    <div class="cookiealert-container">
        <?php echo $obj->text; ?>
        <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
            <?php echo $obj->btnText; ?>
        </button>
    </div>
</div>
<!-- /COOKIES -->
<script src="<?php echo getCDN(); ?>plugin/CookieAlert/cookiealert-standalone.js"></script>