/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var Button = videojs.getComponent('Button');

var socialButton = videojs.extend(Button, {
    //constructor: function(player, options) {
    constructor: function () {
        Button.apply(this, arguments);
        this.addClass('social-button');
        this.controlText("social");
        setTimeout(function(){avideoTooltip(".social-button","Share");},1000);
    },
    handleClick: function () {
        console.log('socialButton clicked');
        tooglePlayersocial();
    }
});

videojs.registerComponent('socialButton', socialButton);
player.getChild('controlBar').addChild('socialButton', {}, getPlayerButtonIndex('fullscreenToggle') - 1);