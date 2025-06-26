/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$uid = uniqid();
?>
<div class="form-group">
    <label class="col-md-4 control-label"><?php echo __("PayPal payout email"); ?></label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fab fa-paypal"></i>
            </span>
            <input id="PayPalReceiverEmail" 
                   placeholder="<?php echo __("PayPal payout email"); ?>"
                   class="form-control" 
                   type="email" 
                   value="<?php echo PayPalYPT::getUserReceiverEmail(User::getId()); ?>"  >
        </div>
    </div>
</div>
<script>
    var PayPalReceiverEmailTimeout;
    $(document).ready(function () {
        $('#PayPalReceiverEmail').keyup(function (e) {
            clearTimeout(PayPalReceiverEmailTimeout);
            PayPalReceiverEmailTimeout = setTimeout(function(){
                savePayPalReceiverEmail();
            },500);
        });
    });

    function savePayPalReceiverEmail() {
        var PayPalReceiverEmail =  $('#PayPalReceiverEmail').val();
        if(PayPalReceiverEmail !== '' && !isEmailValid(PayPalReceiverEmail)){
            console.log('savePayPalReceiverEmail', 'invalid email');
            return false;
        }
        modal.showPleaseWait();
        $.ajax({
            url: '<?php echo $global['webSiteRootURL']; ?>plugin/PayPalYPT/savePayPalReceiverEmail.json.php',
            data: {"PayPalReceiverEmail": PayPalReceiverEmail},
            type: 'post',
            success: function (response) {
                modal.hidePleaseWait();
            }
        });
    }
</script>