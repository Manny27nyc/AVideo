/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<script>
    var liveLinkAppsCalled = {};
    function liveLinkApps($liveLi, className, live_starts) {
        if(new Date(live_starts).getTime()<new Date().getTime()){
            return false;
        }
        if(typeof liveLinkAppsCalled[className] !== 'undefined'){ // do not call it twice
            //return false;
        }
        //console.log('liveLinkApps', $liveLi, className, live_starts, $liveLi.find('.liveNow'));
        liveLinkAppsCalled[className] = live_starts;
        $liveLi.find('.liveNow').html("<?php echo __('Starts in'); ?> <span class='Timer_"+className+"'>"+live_starts+"<span>");
        $liveLi.find('.liveNow').attr("class", 'label label-primary liveFuture');
        //console.log('liveLinkApps', '.'+className+' '+live_starts);
        startTimerToDate(live_starts, '.Timer_'+className, false);
        return $liveLi;
    }
</script>