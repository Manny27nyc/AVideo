/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var Button = videojs.getComponent('Button');

var autoplayButton = videojs.extend(Button, {
    //constructor: function(player, options) {
    constructor: function () {
        Button.apply(this, arguments);
        this.addClass('autoplay-button');
        this.controlText("autoplay");
        setTimeout(function(){avideoTooltip(".autoplay-button","Autoplay");},1000);
    },
    handleClick: function () {
        console.log('autoplayButton clicked');
        if($('.autoplay-button').hasClass('checked')){
            disableAutoPlay();
        }else{
            enableAutoPlay();
        }
    }
});

videojs.registerComponent('autoplayButton', autoplayButton);
player.getChild('controlBar').addChild('autoplayButton', {}, getPlayerButtonIndex('fullscreenToggle') - 1);
checkAutoPlay();