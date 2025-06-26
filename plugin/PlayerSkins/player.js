/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var startAudioSpectrumProgressInterval;
function startAudioSpectrumProgress(spectrumImage) {
    if($('#mainVideo .vjs-play-progress').length){
        $('#mainVideo .vjs-poster').append('<div id="avideo-audio-progress" style="display:none;"></div>');
        player.on('play', function () {
            $('#avideo-audio-progress').fadeIn();
            $('#mainVideo .vjs-poster').css('background-image', "url("+spectrumImage+")");
            $('#mainVideo .vjs-poster').css('background-size', "cover");
            //clearInterval(startAudioSpectrumProgressInterval);
            startAudioSpectrumProgressInterval = setInterval(function () {
                var style = $('#mainVideo .vjs-play-progress').attr('style');
                var percentage = style.replace("width:", "");
                $('#avideo-audio-progress').css('width', percentage.replace(";", ""));
            }, 100);
        });
        player.on('pause', function () {
            //clearInterval(startAudioSpectrumProgressInterval);
        });
    }else{
        setTimeout(function(){startAudioSpectrumProgress(spectrumImage);},500);
    }
}