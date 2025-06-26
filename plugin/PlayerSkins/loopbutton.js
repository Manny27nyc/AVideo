/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var Button = videojs.getComponent('Button');

var LoopButton = videojs.extend(Button, {
    //constructor: function(player, options) {
    constructor: function () {
        Button.apply(this, arguments);
        this.addClass('loop-button');
        if (!isPlayerLoop()) {
            this.addClass('loop-disabled-button');
        } else {
            this.addClass('fa-spin');
        }
        this.controlText("Loop");
    },
    handleClick: function () {
        tooglePlayerLoop();
    }
});

videojs.registerComponent('LoopButton', LoopButton);
player.getChild('controlBar').addChild('LoopButton', {}, 0);