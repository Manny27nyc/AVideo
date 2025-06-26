/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var Button = videojs.getComponent('Button');

var playListProgramButton = videojs.extend(Button, {
    //constructor: function(player, options) {
    constructor: function () {
        Button.apply(this, arguments);
        this.addClass('playListProgram-button');
        this.controlText("playListProgram");
    },
    handleClick: function () {
        console.log('playListProgramButton clicked');
        $('#playListHolder').fadeToggle();
    }
});

videojs.registerComponent('playListProgramButton', playListProgramButton);
player.getChild('controlBar').addChild('playListProgramButton', {}, getPlayerButtonIndex('fullscreenToggle') - 1);

function playListFadeIn() {
    $('#playListHolder').fadeIn();
}

function playListFadeOut() {
    $('#playListHolder').fadeOut();
}

function startTrackDisplayPlayListHolder() {
    if ($(".vjs-text-track-display").length === 0) {
        setTimeout(function () {
            startTrackDisplayPlayListHolder();
        }, 1000);
    }
}
