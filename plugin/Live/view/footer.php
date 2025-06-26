/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<script>
    function onlineLabelOnline(selector) {
        selector = selector.replace(/[&=]/g, '');
        console.log("Change video to Online ",selector);
        console.trace();
        $(selector).removeClass('label-warning');
        $(selector).removeClass('label-danger');
        $(selector).addClass('label-success');
        $(selector).text("<?php echo __("ONLINE"); ?>");
        if($('#indexCol1 div.panel-heading .label-success').length){
            isOnlineLabel = true;
        }
    }

    function onlineLabelPleaseWait(selector) {
        selector = selector.replace(/[&=]/g, '');
        //console.log("Change video to please wait");
        if(!$('#indexCol1 div.panel-heading .label-success').length){
            isOnlineLabel = false;
        }
        $(selector).removeClass('label-success');
        $(selector).removeClass('label-danger');
        $(selector).addClass('label-warning');
        $(selector).text("<?php echo __("Please Wait ..."); ?>");
        if(!$('#indexCol1 div.panel-heading .label-success').length){
            isOnlineLabel = false;
        }
    }

    function onlineLabelOffline(selector) {
        selector = selector.replace(/[&=]/g, '');
        //console.log("Change video to offline");
        $(selector).removeClass('label-warning');
        $(selector).removeClass('label-success');
        $(selector).addClass('label-danger');
        $(selector).text("<?php echo __("OFFLINE"); ?>");
        if(!$('#indexCol1 div.panel-heading .label-success').length){
            isOnlineLabel = false;
        }
    }
    function onlineLabelFinishing(selector) {
        selector = selector.replace(/[&=]/g, '');
        //console.log("Change video to finishing");
        $(selector).removeClass('label-warning');
        $(selector).removeClass('label-success');
        $(selector).addClass('label-danger');
        $(selector).text("<?php echo __("Finishing Live..."); ?>");
        if(!$('#indexCol1 div.panel-heading .label-success').length){
            isOnlineLabel = false;
        }
    }
</script>