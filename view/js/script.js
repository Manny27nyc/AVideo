// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
var modal;
var player;
var floatLeft = "";
var floatTop = "";
var floatWidth = "";
var floatHeight = "";
var changingVideoFloat = 0;
var floatClosed = 0;
var fullDuration = 0;
var isPlayingAd = false;
var mainVideoHeight = 0;
var mouseX;
var mouseY;
var videoContainerDragged = false;
var youTubeMenuIsOpened = false;
var userIsControling = false;
var _serverTime;
var _serverDBTime;
var _serverTimeString;
var _serverDBTimeString;
let deferredPrompt;
var playerCurrentTime;
var mediaId;
$(document).mousemove(function (e) {
    mouseX = e.pageX;
    mouseY = e.pageY;
});
String.prototype.stripAccents = function () {
    var returnvar = this.replace(/[áàâãªä]/g, 'a');
    returnvar = returnvar.replace(/[ÁÀÂÃÄ]/g, 'A');
    returnvar = returnvar.replace(/[ÍÌÎÏ]/g, 'I');
    returnvar = returnvar.replace(/[íìîï]/g, 'i');
    returnvar = returnvar.replace(/[éèêë]/g, 'e');
    returnvar = returnvar.replace(/[ÉÈÊË]/g, 'E');
    returnvar = returnvar.replace(/[óòôõºö]/g, 'o');
    returnvar = returnvar.replace(/[ÓÒÔÕÖ]/g, 'O');
    returnvar = returnvar.replace(/[úùûü]/g, 'u');
    returnvar = returnvar.replace(/[ÚÙÛÜ]/g, 'U');
    returnvar = returnvar.replace(/ç/g, 'c');
    returnvar = returnvar.replace(/Ç/g, 'C');
    returnvar = returnvar.replace(/ñ/g, 'n');
    returnvar = returnvar.replace(/Ñ/g, 'N');
    returnvar = returnvar.replace(/–/g, '-');
    returnvar = returnvar.replace(/[’‘‹›‚]/g, ' ');
    returnvar = returnvar.replace(/[“”«»„]/g, ' ');
    returnvar = returnvar.replace(/ /g, ' ');
    returnvar = returnvar.replace(/Є/g, 'YE');
    returnvar = returnvar.replace(/І/g, 'I');
    returnvar = returnvar.replace(/Ѓ/g, 'G');
    returnvar = returnvar.replace(/і/g, 'i');
    returnvar = returnvar.replace(/№/g, '#');
    returnvar = returnvar.replace(/є/g, 'ye');
    returnvar = returnvar.replace(/ѓ/g, 'g');
    returnvar = returnvar.replace(/А/g, 'A');
    returnvar = returnvar.replace(/Б/g, 'B');
    returnvar = returnvar.replace(/В/g, 'V');
    returnvar = returnvar.replace(/Г/g, 'G');
    returnvar = returnvar.replace(/Д/g, 'D');
    returnvar = returnvar.replace(/Е/g, 'E');
    returnvar = returnvar.replace(/Ё/g, 'YO');
    returnvar = returnvar.replace(/Ж/g, 'ZH');
    returnvar = returnvar.replace(/З/g, 'Z');
    returnvar = returnvar.replace(/И/g, 'I');
    returnvar = returnvar.replace(/Й/g, 'J');
    returnvar = returnvar.replace(/К/g, 'K');
    returnvar = returnvar.replace(/Л/g, 'L');
    returnvar = returnvar.replace(/М/g, 'M');
    returnvar = returnvar.replace(/Н/g, 'N');
    returnvar = returnvar.replace(/О/g, 'O');
    returnvar = returnvar.replace(/П/g, 'P');
    returnvar = returnvar.replace(/Р/g, 'R');
    returnvar = returnvar.replace(/С/g, 'S');
    returnvar = returnvar.replace(/Т/g, 'T');
    returnvar = returnvar.replace(/У/g, 'U');
    returnvar = returnvar.replace(/Ф/g, 'F');
    returnvar = returnvar.replace(/Х/g, 'H');
    returnvar = returnvar.replace(/Ц/g, 'C');
    returnvar = returnvar.replace(/Ч/g, 'CH');
    returnvar = returnvar.replace(/Ш/g, 'SH');
    returnvar = returnvar.replace(/Щ/g, 'SHH');
    returnvar = returnvar.replace(/Ъ/g, '');
    returnvar = returnvar.replace(/Ы/g, 'Y');
    returnvar = returnvar.replace(/Ь/g, '');
    returnvar = returnvar.replace(/Э/g, 'E');
    returnvar = returnvar.replace(/Ю/g, 'YU');
    returnvar = returnvar.replace(/Я/g, 'YA');
    returnvar = returnvar.replace(/а/g, 'a');
    returnvar = returnvar.replace(/б/g, 'b');
    returnvar = returnvar.replace(/в/g, 'v');
    returnvar = returnvar.replace(/г/g, 'g');
    returnvar = returnvar.replace(/д/g, 'd');
    returnvar = returnvar.replace(/е/g, 'e');
    returnvar = returnvar.replace(/ё/g, 'yo');
    returnvar = returnvar.replace(/ж/g, 'zh');
    returnvar = returnvar.replace(/з/g, 'z');
    returnvar = returnvar.replace(/и/g, 'i');
    returnvar = returnvar.replace(/й/g, 'j');
    returnvar = returnvar.replace(/к/g, 'k');
    returnvar = returnvar.replace(/л/g, 'l');
    returnvar = returnvar.replace(/м/g, 'm');
    returnvar = returnvar.replace(/н/g, 'n');
    returnvar = returnvar.replace(/о/g, 'o');
    returnvar = returnvar.replace(/п/g, 'p');
    returnvar = returnvar.replace(/р/g, 'r');
    returnvar = returnvar.replace(/с/g, 's');
    returnvar = returnvar.replace(/т/g, 't');
    returnvar = returnvar.replace(/у/g, 'u');
    returnvar = returnvar.replace(/ф/g, 'f');
    returnvar = returnvar.replace(/х/g, 'h');
    returnvar = returnvar.replace(/ц/g, 'c');
    returnvar = returnvar.replace(/ч/g, 'ch');
    returnvar = returnvar.replace(/ш/g, 'sh');
    returnvar = returnvar.replace(/щ/g, 'shh');
    returnvar = returnvar.replace(/ъ/g, '');
    returnvar = returnvar.replace(/ы/g, 'y');
    returnvar = returnvar.replace(/ь/g, '');
    returnvar = returnvar.replace(/э/g, 'e');
    returnvar = returnvar.replace(/ю/g, 'yu');
    returnvar = returnvar.replace(/я/g, 'ya');
    returnvar = returnvar.replace(/—/g, '-');
    returnvar = returnvar.replace(/«/g, '');
    returnvar = returnvar.replace(/»/g, '');
    returnvar = returnvar.replace(/…/g, '');
    return returnvar;
};
function clean_name(str) {

    str = str.stripAccents().toLowerCase();
    return str.replace(/[!#$&'()*+,/:;=?@[\] ]+/g, "-");
}

var processing_lazyImage = false;
function lazyImage() {
    if (processing_lazyImage) {
        return false;
    }
    processing_lazyImage = true;
    try {
        if ($(".thumbsJPG").length) {
            $('.thumbsJPG').lazy({
                effect: 'fadeIn',
                visibleOnly: true,
                // called after an element was successfully handled
                afterLoad: function (element) {

                    element.addClass('gifNotLoaded');
                    element.removeClass('blur');
                    element.mouseover(function () {

                        if ($(this).hasClass('gifNotLoaded')) {
                            var element = $(this);
                            element.removeClass('gifNotLoaded');
                            var gif = element.parent().find('.thumbsGIF');
                            gif.lazy({
                                effect: 'fadeIn'
                            });
                            /*
                             gif.addClass('animate__animated');
                             gif.addClass('animate__bounceIn');
                             gif.css('-webkit-animation-delay', step+"s");
                             gif.css('animation-delay', "1s");
                             */

                            gif.height(element.height());
                            gif.width(element.width());
                            //console.log('lazyImage', gif);
                        }

                        $("#log").append("<div>Handler for .mouseover() called.</div>");
                    });
                }
            });
            mouseEffect();
        }
    } catch (e) {
    }
    processing_lazyImage = false;
}

lazyImage();
var pleaseWaitIsINUse = false;
var pauseIfIsPlayinAdsInterval;
var seconds_watching_video = 0;
var _startCountPlayingTime;
function setPlayerListners() {
    if (typeof player !== 'undefined') {
        player.on('pause', function () {
            clearTimeout(promisePlayTimeout);
            console.log("setPlayerListners: pause");
            //userIsControling = true;
            clearInterval(pauseIfIsPlayinAdsInterval);
            clearInterval(_startCountPlayingTime);
        });
        player.on('play', function () {
            isTryingToPlay = false;
            clearTimeout(promisePlayTimeout);
            if (startCurrentTime) {
                setTimeout(function () {
                    setCurrentTime(startCurrentTime);
                    startCurrentTime = 0;
                }, 100);
            }
            console.log("setPlayerListners: play");
            //userIsControling = true;
            pauseIfIsPlayinAdsInterval = setInterval(function () {
                pauseIfIsPlayinAds();
            }, 500);
            clearInterval(_startCountPlayingTime);
            _startCountPlayingTime = setInterval(function () {
                seconds_watching_video++;
            }, 1000);
        });
        $("#mainVideo .vjs-mute-control").click(function () {
            Cookies.set('muted', player.muted(), {
                path: '/',
                expires: 365
            });
        });
    } else {
        setTimeout(function () {
            setPlayerListners();
        }, 2000);
    }
}

function removeTracks() {
    var oldTracks = player.remoteTextTracks();
    var i = oldTracks.length;
    while (i--) {
        player.removeRemoteTextTrack(oldTracks[i]);
    }
}

function changeVideoSrc(vid_obj, source) {
    var srcs = [];
    removeTracks();
    var autoLoad = true;
    for (i = 0; i < source.length; i++) {
        if (source[i].type) {
            if (source[i].type === "application/x-mpegURL") {
// it is HLS cancel it
//return false;
                autoLoad = false;
            }
            srcs.push(source[i]);
        } else if (source[i].srclang) {
            player.addRemoteTextTrack(source[i]);
        }
    }
    console.log('changeVideoSrc srcs', srcs);
    vid_obj.src(srcs);
    setTimeout(function () {
        if (autoLoad) {
            changeVideoSrcLoad();
        } else {
            player.play();
        }
    }, 1000);
    return true;
}

function changeVideoSrcLoad() {
    console.log("changeVideoSrcLoad: Try to load player");
    player.load();
    player.ready(function () {
        console.log("changeVideoSrcLoad: Player ready");
        var err = this.error();
        if (err && err.code) {
            console.log("changeVideoSrcLoad: Load player Error");
            setTimeout(function () {
                changeVideoSrcLoad();
            }, 1000);
        } else {
            console.log("changeVideoSrcLoad: Load player Success, Play");
            setTimeout(function () {
                player.load();
                console.log("changeVideoSrcLoad: Trying to play");
                player.play();
            }, 1000);
        }
    });
}
var _reloadAdsTimeout;
var isReloadingAds = false;
function reloadAds() {
    if (isReloadingAds) {
        return false;
    }
    isReloadingAds = true;
    setTimeout(function () {
        isReloadingAds = false;
    }, 500);
    clearTimeout(_reloadAdsTimeout);
    console.log('reloadAds ');
    if (playerIsReady() && player.ima) {
        try {
            console.log('reloadAds player.ima.getAdsManager()', player.ima.getAdsManager());
            if (player.ima.getAdsManager()) {
                player.ima.requestAds();
            }
            player.ima.changeAdTag(null);
            player.ima.setContentWithAdTag(null, _adTagUrl, false);
            player.ima.changeAdTag(_adTagUrl);
            setTimeout(function () {
                player.ima.requestAds();
                console.log('reloadAds done');
            }, 2000);
            player.ima.requestAds();
        } catch (e) {
            console.log('reloadAds ERROR', e.message);
        }
    } else {
        _reloadAdsTimeout = setTimeout(function () {
            reloadAds();
        }, 200);
    }
}


/**
 *
 * @param {String} str 00:00:00
 * @returns {int} int of seconds
 */
function strToSeconds(str) {
    var partsOfStr = str.split(':');
    var seconds = parseInt(partsOfStr[2]);
    seconds += parseInt(partsOfStr[1]) * 60;
    seconds += parseInt(partsOfStr[0]) * 60 * 60;
    return seconds;
}

/**
 *
 * @param {int} seconds
 * @param {int} level 3 = 00:00:00 2 = 00:00 1 = 00
 * @returns {String} 00:00:00
 */
function secondsToStr(seconds, level) {
    var hours = parseInt(seconds / (60 * 60));
    var minutes = parseInt(seconds / (60));
    seconds = parseInt(seconds % (60));
    hours = hours > 9 ? hours : "0" + hours;
    minutes = minutes > 9 ? minutes : "0" + minutes;
    seconds = seconds > 9 ? seconds : "0" + seconds;
    switch (level) {
        case 3:
            return hours + ":" + minutes + ":" + seconds;
            break;
        case 2:
            return minutes + ":" + seconds;
            break;
        case 1:
            return seconds;
            break;
        default:
            return hours + ":" + minutes + ":" + seconds;
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function isEmailValid(email) {
    return validateEmail(email);
}

function subscribe(email, user_id) {
    modal.showPleaseWait();
    $.ajax({
        url: webSiteRootURL + 'objects/subscribe.json.php',
        method: 'POST',
        data: {
            'email': email,
            'user_id': user_id
        },
        success: function (response) {
            var totalElement = $('.notificationButton' + user_id + ' .badge');
            if (response.subscribe == "i") {
                $('.notificationButton' + user_id).removeClass("subscribed");
                totalElement.text(parseInt(totalElement.first().text()) - 1);
            } else {
                $('.notificationButton' + user_id).addClass("subscribed");
                totalElement.text(parseInt(totalElement.first().text()) + 1);
            }
            $('#popover-content #subscribeEmail').val(email);
            $('.subscribeButton' + user_id).popover('hide');
            modal.hidePleaseWait();
        }
    });
}

function toogleNotify(user_id) {
    email = $('#subscribeEmail' + user_id).val();
    subscribeNotify(email, user_id);
}
function subscribeNotify(email, user_id) {
    modal.showPleaseWait();
    $.ajax({
        url: webSiteRootURL + 'objects/subscribeNotify.json.php',
        method: 'POST',
        data: {
            'email': email,
            'user_id': user_id
        },
        success: function (response) {
            if (response.notify) {
                $('.notificationButton' + user_id).addClass("notify");
            } else {
                $('.notificationButton' + user_id).removeClass("notify");
            }
            modal.hidePleaseWait();
        }
    });
}
function mouseEffect() {

    $(".thumbsImage").on("mouseenter", function () {
        var gif = $(this).find(".thumbsGIF");
        var jpg = $(this).find(".thumbsJPG");
        try {
            gif.lazy({effect: 'fadeIn'});
            setTimeout(function () {
                gif.height(jpg.height());
                gif.width(jpg.width());
            }, 100);
        } catch (e) {
        }
        gif.height(jpg.height());
        gif.width(jpg.width());
        gif.stop(true, true).fadeIn();
    });
    $(".thumbsImage").on("mouseleave", function () {
        $(this).find(".thumbsGIF").stop(true, true).fadeOut();
    });
}

function isMobile() {
    var check = false;
    (function (a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
            check = true
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
}

var last_videos_id = 0;
var last_currentTime = -1;
var videoViewAdded = false;
var addViewBeaconTimeout;
function addView(videos_id, currentTime) {
    addViewSetCookie(PHPSESSID, videos_id, currentTime, seconds_watching_video);
    if (last_videos_id == videos_id && last_currentTime == currentTime) {
        return false;
    }
    if (currentTime > 5 && currentTime % 5 !== 0) { // only update each 5 seconds
        return false;
    }

    if (!videoViewAdded || videoViewAdded !== videos_id) {
        videoViewAdded = videos_id;
        last_videos_id = videos_id;
        last_currentTime = currentTime;
        _addView(videos_id, currentTime);
    }
    return true;
}

function _addView(videos_id, currentTime) {
    if (typeof PHPSESSID == 'undefined') {
        PHPSESSID = '';
    }
    var url = webSiteRootURL + 'objects/videoAddViewCount.json.php';
    url = addGetParam(url, 'PHPSESSID', PHPSESSID);
    console.log('_addView', videos_id, currentTime);
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            'id': videos_id,
            'currentTime': currentTime
        },
        success: function (response) {
            $('.view-count' + videos_id).text(response.countHTML);
        }
    });
}

var _addViewAsyncSent = false;
function _addViewAsync() {
    if (_addViewAsyncSent || typeof webSiteRootURL == 'undefined' || typeof player == 'undefined') {
        return false;
    }
    if (typeof PHPSESSID == 'undefined') {
        PHPSESSID = '';
    }
    console.log('_addViewAsync', mediaId, playerCurrentTime);
    var url = webSiteRootURL + 'objects/videoAddViewCount.json.php';
    url = addGetParam(url, 'PHPSESSID', PHPSESSID);
    _addViewAsyncSent = true;
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            'id': mediaId,
            'currentTime': playerCurrentTime,
            'seconds_watching_video': seconds_watching_video
        },
        async: false,
        success: function (response) {
            console.log('_addViewAsync', response);
            setTimeout(function () {
                _addViewAsyncSent = false;
            }, 2000);
        }
    });
}

var _addViewFromCookie_addingtime = false;
function addViewFromCookie() {
    if (typeof webSiteRootURL == 'undefined') {
        return false;
    }
    if (_addViewFromCookie_addingtime) {
        return false;
    }
    _addViewFromCookie_addingtime = true;
    var addView_PHPSESSID = Cookies.get('addView_PHPSESSID');
    var addView_videos_id = Cookies.get('addView_videos_id');
    var addView_playerCurrentTime = Cookies.get('addView_playerCurrentTime');
    var addView_seconds_watching_video = Cookies.get('addView_seconds_watching_video');
    if (!addView_PHPSESSID || addView_PHPSESSID === 'false' ||
            !addView_videos_id || addView_videos_id === 'false' ||
            !addView_playerCurrentTime || addView_playerCurrentTime === 'false' ||
            !addView_seconds_watching_video || addView_seconds_watching_video === 'false') {
        return false;
    }
    console.log('addViewFromCookie', addView_videos_id, addView_playerCurrentTime, addView_seconds_watching_video);
    var url = webSiteRootURL + 'objects/videoAddViewCount.json.php';
    url = addGetParam(url, 'PHPSESSID', addView_PHPSESSID);
    if (mediaId == addView_videos_id) {
        // it is the same video, play at the last momment
        forceCurrentTime = addView_playerCurrentTime;
    }

    $.ajax({
        url: url,
        method: 'POST',
        data: {
            'id': addView_videos_id,
            'currentTime': addView_playerCurrentTime,
            'seconds_watching_video': addView_seconds_watching_video
        },
        async: false,
        success: function (response) {
            _addViewFromCookie_addingtime = false;
            console.log('addViewFromCookie', response);
            addViewSetCookie(false, false, false, false);
        }
    });
}

function addViewSetCookie(PHPSESSID, videos_id, playerCurrentTime, seconds_watching_video) {
//console.log('addViewSetCookie', videos_id, playerCurrentTime, seconds_watching_video, new Error().stack);
    Cookies.set('addView_PHPSESSID', PHPSESSID, {
        path: '/',
        expires: 1
    });
    Cookies.set('addView_videos_id', videos_id, {
        path: '/',
        expires: 1
    });
    Cookies.set('addView_playerCurrentTime', playerCurrentTime, {
        path: '/',
        expires: 1
    });
    Cookies.set('addView_seconds_watching_video', seconds_watching_video, {
        path: '/',
        expires: 1
    });
}

function getPlayerButtonIndex(name) {
    var children = player.getChild('controlBar').children();
    for (i = 0; i < children.length; i++) {
        if (children[i].name_ === name) {
            return i;
        }
    }
    return children.length;
}

function copyToClipboard(text) {
    $('body').append('<textarea id="elementToCopyAvideo" style="filter: alpha(opacity=0);-moz-opacity: 0;-khtml-opacity: 0; opacity: 0;position: absolute;z-index: -9999;top: 0;left: 0;pointer-events: none;"></textarea>');
    $('#elementToCopyAvideo').css({'top': mouseY, 'left': 0}).fadeIn('slow');
    $('#elementToCopyAvideo').val(text);
    $('#elementToCopyAvideo').focus();
    $('#elementToCopyAvideo').select();
    document.execCommand('copy');
    $('#elementToCopyAvideo').remove();
    $.toast("Copied to Clipboard");
}

function nl2br(str, is_xhtml) {
    if (typeof str === 'undefined' || str === null) {
        return '';
    }
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}
function inIframe() {
    var url = new URL(location.href);
    var avideoIframe = url.searchParams.get("avideoIframe");
    if (avideoIframe && avideoIframe !== '0' && avideoIframe !== 0) {
        return true;
    }
    try {
        return window.self !== window.top;
    } catch (e) {
        return true;
    }
}

function playerIsReady() {
    return (typeof player !== 'undefined' && player.isReady_);
}

var promisePlaytry = 20;
var promisePlaytryNetworkFail = 0;
var promisePlayTimeoutTime = 500;
var promisePlayTimeout;
var promisePlay;
var browserPreventShowed = false;
var playerPlayTimeout;
var isTryingToPlay = false;
var promisePlaytryNetworkFailTimeout;
function playerPlay(currentTime) {
    isTryingToPlay = true;
    clearTimeout(playerPlayTimeout);
    if (playerIsPlayingAds()) {
        return false;
    }
    if (currentTime) {
        console.log("playerPlay time:", currentTime);
    }
    if (!playerIsReady()) {
        playerPlayTimeout = setTimeout(function () {
            playerPlay(currentTime);
        }, 200);
        return false;
    }
    if (userIsControling) { // stops here if the user already clicked on play or pause
        console.log("playerPlay: userIsControling");
        return true;
    }
    if (promisePlaytry <= 0) {
        console.log("playerPlay: promisePlaytry <= 0");
        if (!browserPreventShowed) {
            browserPreventShowed = true;
            $.toast("Your browser prevent autoplay");
        }
        return false;
    }
    promisePlaytry--;
    if (typeof player !== 'undefined') {
        if (currentTime) {
            setCurrentTime(currentTime);
        }
        try {
            console.log("playerPlay: Trying to play", player);
            promisePlay = player.play();
            if (promisePlay !== undefined) {
                tryToPlay(currentTime);
                console.log("playerPlay: promise found", currentTime);
                setPlayerListners();
                promisePlay.then(function () {
                    console.log("playerPlay: Autoplay started", currentTime);
                    userIsControling = true;
                    if (player.paused()) {
                        console.log("The video still paused, trying to mute and play");
                        if (promisePlaytry <= 10) {
                            console.log("playerPlay: (" + promisePlaytry + ") The video still paused, trying to mute and play");
                            tryToPlayMuted(currentTime);
                        } else {
                            console.log("playerPlay: (" + promisePlaytry + ") The video still paused, trying to play again");
                            tryToPlay(currentTime);
                        }
                    } else {
                        //player.muted(false);
                        if (player.muted() && !inIframe()) {
                            showUnmutePopup();
                        }
                    }
                }).catch(function (error) {
                    if (player.networkState() === 3 && promisePlaytryNetworkFail < 5) {
                        promisePlaytry = 20;
                        promisePlaytryNetworkFail++;
                        console.log("playerPlay: Network error detected, trying again", promisePlaytryNetworkFail);
                        clearTimeout(promisePlaytryNetworkFailTimeout);
                        promisePlaytryNetworkFailTimeout = setTimeout(function () {
                            player.src(player.currentSources());
                            userIsControling = false;
                            tryToPlay(currentTime);
                        }, promisePlaytryNetworkFail * 1000);
                    } else {
                        if (promisePlaytryNetworkFail >= 5) {
                            userIsControling = true;
                            console.log("playerPlay: (promisePlaytryNetworkFail) Autoplay was prevented");
                            player.pause();
                        } else if (promisePlaytry <= 10) {
                            console.log("playerPlay: (" + promisePlaytry + ") Autoplay was prevented, trying to mute and play ***");
                            tryToPlayMuted(currentTime);
                        } else {
                            console.log("playerPlay: (" + promisePlaytry + ") Autoplay was prevented, trying to play again");
                            tryToPlay(currentTime);
                        }
                    }
                });
            } else {
                tryToPlay(currentTime);
            }
        } catch (e) {
            console.log("playerPlay: We could not autoplay, trying again in 1 second");
            tryToPlay(currentTime);
        }
    } else {
        console.log("playerPlay: Player is Undefined");
    }
}

function showUnmutePopup() {

    var donotShowUnmuteAgain = Cookies.get('donotShowUnmuteAgain');
    if (!donotShowUnmuteAgain) {
        var span = document.createElement("span");
        span.innerHTML = "<b>Would</b> you like to unmute it?<div id='allowAutoplay' style='max-height: 100px; overflow-y: scroll;'></div>";
        swal({
            title: "Your Media is Muted",
            icon: "warning",
            content: span,
            dangerMode: true,
            buttons: {
                cancel: "Cancel",
                unmute: true,
                donotShowUnmuteAgain: {
                    text: "Don't show again",
                    value: "donotShowUnmuteAgain",
                    className: "btn-danger",
                },
            }
        }).then(function (value) {
            switch (value) {
                case "unmute":
                    player.muted(false);
                    break;
                case "donotShowUnmuteAgain":
                    Cookies.set('donotShowUnmuteAgain', true, {
                        path: '/',
                        expires: 365
                    });
                    break;
            }
        });
    }
    showMuteTooltip();
    setTimeout(function () {
        $("#allowAutoplay").load(webSiteRootURL + "plugin/PlayerSkins/allowAutoplay/");
        player.userActive(true);
    }, 500);
}

function tryToPlay(currentTime) {
    clearTimeout(promisePlayTimeout);
    promisePlayTimeout = setTimeout(function () {
        if (player.paused()) {
            playerPlayTimeout = setTimeout(function () {
                playerPlay(currentTime);
            }, 200);
        }
    }, promisePlayTimeoutTime);
}

function tryToPlayMuted(currentTime) {
    muteInCookieAllow();
    return tryToPlay(currentTime);
}

function muteIfNotAudio() {
    if (!player.isAudio()) {
        console.log("muteIfNotAudio: We will mute this video");
        player.muted(true);
        return true;
    }
    console.log("muteIfNotAudio: We will not mute an audio");
    return false;
}

function muteInCookieAllow() {
    var mute = Cookies.get('muted');
    if (isALiveContent() || typeof mute === 'undefined' || (mute && mute !== "false")) {
        console.log("muteInCookieAllow: said yes");
        return muteIfNotAudio();
    }
    console.log("muteInCookieAllow: said no");
    return false;
}

function playMuted(currentTime) {
    muteInCookieAllow();
    playerPlayTimeout = setTimeout(function () {
        playerPlay(currentTime);
    }, 200);
}

function showMuteTooltip() {
    if ($("#mainVideo .vjs-volume-panel").length) {
        if (!$("#mainVideo .vjs-volume-panel").is(":visible")) {
            setTimeout(function () {
                showMuteTooltip();
            }, 500);
            return false;
        }
        $("#mainVideo .vjs-volume-panel").attr("data-toggle", "tooltip");
        $("#mainVideo .vjs-volume-panel").attr("data-placement", "top");
        $("#mainVideo .vjs-volume-panel").attr("title", "Click to activate the sound");
        $('#mainVideo .vjs-volume-panel[data-toggle="tooltip"]').tooltip({container: '.vjs-control-bar', html: true});
        $('#mainVideo .vjs-volume-panel[data-toggle="tooltip"]').tooltip('show');
        $("#mainVideo .vjs-volume-panel").click(function () {
            console.log("remove unmute tooltip");
            $('#mainVideo .vjs-volume-panel[data-toggle="tooltip"]').tooltip('hide');
            $("#mainVideo .vjs-volume-panel").removeAttr("data-toggle");
            $("#mainVideo .vjs-volume-panel").removeAttr("data-placement");
            $("#mainVideo .vjs-volume-panel").removeAttr("title");
            $("#mainVideo .vjs-volume-panel").removeData('tooltip').unbind().next('div.tooltip').remove();
        });
    }
    player.userActive(true);
    setTimeout(function () {
        player.userActive(true);
    }, 1000);
    setTimeout(function () {
        player.userActive(true);
    }, 1500);
    setTimeout(function () {
        $('#mainVideo .vjs-volume-panel[data-toggle="tooltip"]').tooltip('hide');
    }, 5000);
}

function playerPlayIfAutoPlay(currentTime) {
    if (isWebRTC()) {
        return false;
    }
    if (forceCurrentTime !== null) {
        currentTime = forceCurrentTime;
        forceCurrentTime = null;
        console.log("playerPlayIfAutoPlay: forceCurrentTime:", currentTime);
    }

    if (currentTime) {
        setCurrentTime(currentTime);
    }
    if (isAutoplayEnabled()) {
        playerPlayTimeout = setTimeout(function () {
            console.log('playerPlayIfAutoPlay true', currentTime);
            playerPlay(currentTime);
        }, 200);
        return true;
    }
    console.log('playerPlayIfAutoPlay false', currentTime);
    //$.toast("Autoplay disabled");
    return false;
}

function playerPlayMutedIfAutoPlay(currentTime) {
    if (isWebRTC()) {
        return false;
    }
    if (forceCurrentTime !== null) {
        currentTime = forceCurrentTime;
        forceCurrentTime = null;
        console.log("playerPlayIfAutoPlay: forceCurrentTime:", currentTime);
    }

    if (currentTime) {
        setCurrentTime(currentTime);
    }
    if (isAutoplayEnabled()) {
        playerPlayTimeout = setTimeout(function () {
            console.log('playerPlayIfAutoPlay true', currentTime);
            tryToPlayMuted(currentTime);
        }, 200);
        return true;
    }
    console.log('playerPlayIfAutoPlay false', currentTime);
    //$.toast("Autoplay disabled");
    return false;
}

function playNext(url) {
    if (!player.paused()) {
        return false;
    }
    if (playerIsPlayingAds()) {
        setTimeout(function () {
            playNext(url);
        }, 1000);
    } else if (isPlayNextEnabled()) {
        modal.showPleaseWait();
        if (typeof autoPlayAjax == 'undefined' || !autoPlayAjax) {
            console.log("playNext changing location " + url);
            document.location = url;
        } else {
            forceCurrentTime = 0;
            setCurrentTime(0);
            console.log("playNext ajax");
            $.ajax({
                url: webSiteRootURL + 'view/infoFromURL.php?url=' + encodeURI(url),
                success: function (response) {
                    console.log(response);
                    if (!response || response.error) {
                        console.log("playNext ajax fail");
                        if (response.url) {
                            document.location = response.url;
                        }
                    } else {
                        console.log("playNext ajax success");
                        $('topInfo').hide();
                        playNextURL = (typeof isEmbed !== 'undefined' && isEmbed) ? response.nextURLEmbed : response.nextURL;
                        console.log("New playNextURL", playNextURL);
                        var cSource = false;
                        try {
                            cSource = changeVideoSrc(player, response.sources);
                        } catch (e) {
                            console.log('changeVideoSrc', e.message);
                        }
                        if (!cSource) {
                            document.location = url;
                            return false;
                        }
                        mediaId = response.videos_id;
                        webSocketVideos_id = mediaId;
                        $('video, #mainVideo').attr('poster', response.poster);
                        player.poster(response.poster);
                        history.pushState(null, null, url);
                        $('.topInfoTitle, title').text(response.title);
                        $('#topInfo img').attr('src', response.userPhoto);
                        $('#topInfo a').attr('href', response.url);
                        modal.hidePleaseWait();
                        if ($('#modeYoutubeBottom').length) {
                            $.ajax({
                                url: url,
                                success: function (response) {
                                    modeYoutubeBottom = $(response).find('#modeYoutubeBottom').html();
                                    $('#modeYoutubeBottom').html(modeYoutubeBottom);
                                }
                            });
                        }
                    }
                }
            });
        }
    } else if (isPlayerLoop()) {
        avideoToast("Looping video");
        userIsControling = false;
        playerPlayTimeout = setTimeout(function () {
            playerPlay(currentTime);
        }, 200);
    }
}

function formatBytes(bytes, decimals) {
    if (bytes == 0)
        return '0 Bytes';
    var k = 1024,
            dm = decimals <= 0 ? 0 : decimals || 2,
            sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
            i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}

function tooglePlayerLoop() {
    setPlayerLoop(!isPlayerLoop());
}

var setPlayerLoopSetTimeout;
function setPlayerLoop(loop) {
    clearTimeout(setPlayerLoopSetTimeout);
    if (typeof player === 'undefined' && $('#mainVideo').length) {
        setPlayerLoopSetTimeout = setTimeout(function () {
            setPlayerLoop(loop)
        }, 1000);
        return false;
    }
    if (loop) {
        console.log("Loop ON");
        //$.toast("Loop ON");
        player.loop(1);
        $(".loop-button").removeClass('loop-disabled-button');
        $(".loop-button, .loopButton").addClass('fa-spin');
    } else {
        $(".loop-button").addClass('loop-disabled-button');
        $(".loop-button, .loopButton").removeClass('fa-spin');
        console.log("Loop OFF");
        //$.toast("Loop OFF");
        player.loop(0);
    }
    Cookies.set('playerLoop', loop, {
        path: '/',
        expires: 365
    });
    if (typeof setImageLoop === 'function') {
        setImageLoop();
    }
}

function setImageLoop() {
    if (isPlayerLoop()) {
        $('.loopButton').removeClass('opacityBtn');
        $('.loopButton').addClass('fa-spin');
    } else {
        $('.loopButton').addClass('opacityBtn');
        $('.loopButton').removeClass('fa-spin');
    }
}

function toogleImageLoop(t) {
    tooglePlayerLoop();
    if (typeof setImageLoop === 'function') {
        setImageLoop();
    }
}

function isPlayerLoop() {
    if (typeof player === 'undefined' && $('#mainVideo').length) {
        return false;
    }
    var loop = Cookies.get('playerLoop');
    if (!loop || loop === "false") {
        return player.loop();
    } else {
        return true;
    }
}

function isArray(what) {
    return Object.prototype.toString.call(what) === '[object Array]';
}

function reloadVideoJS() {
    if (typeof player.currentSources === 'function') {
        var src = player.currentSources();
        player.src(src);
    }
}

var initdone = false;
var startCurrentTime = 0;
var forceCurrentTime = null;
function setCurrentTime(currentTime) {
    console.log("setCurrentTime:", currentTime, forceCurrentTime);
    if (forceCurrentTime !== null) {
        startCurrentTime = forceCurrentTime;
        currentTime = forceCurrentTime;
        forceCurrentTime = null;
        console.log("forceCurrentTime:", currentTime);
    } else if (startCurrentTime != currentTime) {
        startCurrentTime = currentTime;
        console.log("setCurrentTime changed:", currentTime);
    }
    console.log('setCurrentTime', currentTime);
    if (typeof player !== 'undefined') {
        if (isTryingToPlay) {
            if (currentTime <= player.currentTime()) {
                console.log('setCurrentTime is trying to play', currentTime);
                return false; // if is trying to play, only update if the time is greater
            }
        }
        player.currentTime(currentTime);
        initdone = false;
        // wait for video metadata to load, then set time 
        player.on("loadedmetadata", function () {
            player.currentTime(currentTime);
        });
        // iPhone/iPad need to play first, then set the time
        // events: https://www.w3.org/TR/html5/embedded-content-0.html#mediaevents
        player.on("canplaythrough", function () {
            if (!initdone) {
                player.currentTime(currentTime);
                initdone = true;
            }
        });
    } else {
        setTimeout(function () {
            setCurrentTime(currentTime);
        }, 1000);
    }
}

function isALiveContent() {
    if (typeof isLive !== 'undefined' && isLive && (typeof isOnlineLabel === 'undefined' || isOnlineLabel === true || $('.liveOnlineLabel').hasClass('label-success'))) {
        return true;
    }
    return false;
}

function isWebRTC() {
    if (typeof _isWebRTC !== 'undefined') {
        return _isWebRTC;
    }
    return false;
}

function isAutoplayEnabled() {
//console.log("Cookies.get('autoplay')", Cookies.get('autoplay'));
    if (typeof forceautoplay !== 'undefined' && forceautoplay) {
        return true;
    } else if (isWebRTC()) {
        console.log("isAutoplayEnabled said No because is WebRTC ");
        return false;
    } else if (isALiveContent()) {
//console.log("isAutoplayEnabled always autoplay live contents");
        return true;
    } else
    if ($("#autoplay").length && $("#autoplay").is(':visible')) {
        autoplay = $("#autoplay").is(":checked");
        //console.log("isAutoplayEnabled #autoplay said " + ((autoplay) ? "Yes" : "No"));
        setAutoplay(autoplay);
        return autoplay;
    } else if (
            typeof Cookies !== 'undefined' &&
            typeof Cookies.get('autoplay') !== 'undefined'
            ) {
        if (Cookies.get('autoplay') === 'true' || Cookies.get('autoplay') == true) {
//console.log("isAutoplayEnabled Cookie said Yes ");
            setAutoplay(true);
            return true;
        } else {
//console.log("isAutoplayEnabled Cookie said No ");
            setAutoplay(false);
            return false;
        }
    } else {
        if (typeof autoplay !== 'undefined') {
//console.log("isAutoplayEnabled autoplay said " + ((autoplay) ? "Yes" : "No"));
            setAutoplay(autoplay);
            return autoplay;
        }
    }
    setAutoplay(false);
    //console.log("isAutoplayEnabled Default is No ");
    return false;
}

function setAutoplay(value) {
    Cookies.set('autoplay', value, {
        path: '/',
        expires: 365
    });
}

function showAutoPlayVideoDiv() {
    var auto = $("#autoplay").prop('checked');
    if (!auto) {
        $('#autoPlayVideoDiv').slideUp();
    } else {
        $('#autoPlayVideoDiv').slideDown();
    }
}

function enableAutoPlay() {
    setAutoplay(true);
    checkAutoPlay();
}

function disableAutoPlay() {
    setAutoplay(false);
    checkAutoPlay();
}

function checkAutoPlay() {
    if (isAutoplayEnabled()) {
        $("#autoplay").prop('checked', true);
        $('.autoplay-button').addClass('checked');
        avideoTooltip(".autoplay-button", "Autoplay is ON");
    } else {
        $("#autoplay").prop('checked', false);
        $('.autoplay-button').removeClass('checked');
        avideoTooltip(".autoplay-button", "Autoplay is OFF");
    }
    showAutoPlayVideoDiv();
}

function isPlayNextEnabled() {
    if (isPlayerLoop()) {
        return false;
    } else if (isAutoplayEnabled()) {
        return true;
    }
    return false;
}

function avideoAlert(title, msg, type) {
    if (typeof msg !== 'string') {
        return false;
    }
    if (msg !== msg.replace(/<\/?[^>]+(>|$)/g, "")) {//it has HTML
        avideoAlertHTMLText(title, msg, type);
    } else {
        swal(title, msg, type);
    }
}

function avideoAlertOnce(title, msg, type, uid) {
    var cookieName = 'avideoAlertOnce'+uid;
    if(!Cookies.set(cookieName)){ 
        Cookies.set(cookieName, 1, {
            path: '/',
            expires: 365
        });
        return avideoAlert(title, msg, type);
    }
}

function _avideoToast(msg, icon) {
    var options = {text: msg, hideAfter: 7000};
    if (icon) {
        options.icon = icon;
    }
    $.toast(options);
}
function avideoToast(msg) {
    _avideoToast(msg, null);
}
function avideoToastInfo(msg) {
    _avideoToast(msg, 'info');
}
function avideoToastError(msg) {
    _avideoToast(msg, 'error');
}
function avideoToastSuccess(msg) {
    _avideoToast(msg, 'success');
}
function avideoToastWarning(msg) {
    _avideoToast(msg, 'warning');
}

function avideoAlertAJAXHTML(url) {
    modal.showPleaseWait();
    $.ajax({
        url: url,
        success: function (response) {
            avideoAlertText(response);
            modal.hidePleaseWait();
        }
    });
}

function avideoAlertAJAX(url) {
    modal.showPleaseWait();
    $.ajax({
        url: url,
        success: function (response) {
            avideoResponse(response);
            modal.hidePleaseWait();
        }
    });
}

function avideoAlertHTMLText(title, msg, type) {
    var span = document.createElement("span");
    span.innerHTML = msg;
    swal({
        title: title,
        content: span,
        icon: type,
        closeModal: true,
        buttons: type ? true : false,
    });
}

function avideoModalIframeClose() {
    console.log('avideoModalIframeClose');
    try {
        swal.close();
    } catch (e) {

    }
    try {
        if (inIframe()) {
            window.parent.swal.close();
        }
    } catch (e) {

    }
}

function avideoModalIframeCloseToastSuccess(msg) {
    avideoModalIframeClose();
    avideoToastSuccess(msg);
    window.parent.avideoToastSuccess(msg);
}

function avideoModalIframe(url) {
    avideoModalIframeWithClassName(url, 'swal-modal-iframe', false);
}

function avideoModalIframeSmall(url) {
    avideoModalIframeWithClassName(url, 'swal-modal-iframe-small', false);
}

function avideoModalIframeLarge(url) {
    avideoModalIframeWithClassName(url, 'swal-modal-iframe-large', false);
}

function avideoModalIframeFullScreen(url) {
    avideoModalIframeWithClassName(url, 'swal-modal-iframe-full', true);
}

function avideoModalIframeFullScreenClose() {
    $('.swal-overlay iframe').attr('src', 'about:blank');
    swal.close();
}
// this is to make sure when the use click on the back page button it will close the iframe
window.onload = function () {
    if (typeof history.pushState === "function") {
        console.log('history.pushState loaded');
        window.onpopstate = function () {
            console.log('onpopstate');
            avideoModalIframeFullScreenClose();
        };
    }
}

function avideoModalIframeFull(url) {
    avideoModalIframeFullScreen(url);
}

var avideoModalIframeFullScreenOriginalURL = false;
var avideoModalIframeWithClassNameTimeout;
function avideoModalIframeWithClassName(url, className, updateURL) {
    showURL = document.location.href;
    if (updateURL) {
        if (!avideoModalIframeFullScreenOriginalURL) {
            avideoModalIframeFullScreenOriginalURL = document.location.href;
        }
        showURL = url;
    }
    try {
        window.history.pushState("", "", showURL);
    } catch (e) {

    }
    url = addGetParam(url, 'avideoIframe', 1);
    var html = '';
    html = '<div id="avideoModalIframeDiv" class="clearfix popover-title">';
    html += '<button class="btn btn-default pull-left" onclick="avideoModalIframeFullScreenClose();">';
    html += '<i class="fas fa-chevron-left"></i>';
    html += '</button><img src="' + webSiteRootURL + 'videos/userPhoto/logo.png" class="img img-responsive " style="max-height:34px;"></div>';
    html += '<iframe id="avideoModalIframe" frameBorder="0" class="animate__animated animate__bounceInDown" src="' + url + '"  allow="camera *;microphone *" ></iframe>';
    var span = document.createElement("span");
    span.innerHTML = html;
    swal({
        content: span,
        closeModal: true,
        buttons: false,
        className: className,
        onClose: avideoModalIframeRemove
    }).then(() => {
        if (avideoModalIframeFullScreenOriginalURL) {
            window.history.pushState("", "", avideoModalIframeFullScreenOriginalURL);
            avideoModalIframeFullScreenOriginalURL = false;
        }
    });
    setTimeout(function () {
        if (!isSameDomain(url)) {
            console.log('avideoModalIframeWithClassName different domain');
            avideoModalIframeRemove();
        } else {
            var contentLoaded = false;
            try {
                $('#avideoModalIframe').load(function () {
                    contentLoaded = true;
                    console.log('avideoModalIframeWithClassName content loaded 1');
                    clearTimeout(avideoModalIframeWithClassNameTimeout);
                    avideoModalIframeRemove();
                });
            } catch (e) {
            }

            if ($('#avideoModalIframe').contents().find("body").length) {
                console.log('avideoModalIframeWithClassName content loaded 2');
                contentLoaded = true;
            }

            if (contentLoaded) {
                console.log('avideoModalIframeWithClassName content loaded 3');
                clearTimeout(avideoModalIframeWithClassNameTimeout);
                avideoModalIframeRemove();
            } else {
                console.log('avideoModalIframeWithClassName content loaded 4');
                clearTimeout(avideoModalIframeWithClassNameTimeout);
                avideoModalIframeWithClassNameTimeout = setTimeout(function () {
                    if (!$('#avideoModalIframe').contents().find("body").length) {
                        console.log('avideoModalIframeWithClassName content loaded 5');
                        // is not loaded
                        url = addGetParam(url, 'avideoIframe', 0);
                        if (isSameDomain(url)) {
                            document.location = url;
                        }
                    }
                }, 5000);
            }
        }
    }, 1000);
}

function checkIframeLoaded(id) {
// Get a handle to the iframe element
    var iframe = document.getElementById(id);
    var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
    // Check if loading is complete
    if (iframeDoc.readyState == 'complete') {
//iframe.contentWindow.alert("Hello");
        iframe.contentWindow.onload = function () {
            alert("I am loaded");
        };
        // The loading is complete, call the function we want executed once the iframe is loaded
        afterLoading();
        return;
    }

// If we are here, it is not loaded. Set things up so we check   the status again in 100 milliseconds
    window.setTimeout(checkIframeLoaded, 100);
}

function avideoModalIframeIsVisible() {
    var modal = '';
    if ($('.swal-modal-iframe-small').length) {
        modal = $('.swal-modal-iframe-small');
    } else if ($('.swal-modal-iframe-large').length) {
        modal = $('.swal-modal-iframe-large');
    } else if ($('.swal-modal-iframe-full').length) {
        modal = $('.swal-modal-iframe-full');
    } else {
        modal = $('.swal-modal-iframe');
    }

    if (modal.parent().hasClass('swal-overlay--show-modal')) {
        return true;
    } else {
        return false;
    }
}

function avideoModalIframeRemove() {
    if (avideoModalIframeIsVisible()) {
        setTimeout(function () {
            avideoModalIframeRemove();
        }, 1000);
    } else {
        console.log('avideoModalIframeRemove');
        $('.swal-content').html('');
    }
}

function avideoResponse(response) {
    console.log('avideoResponse', response);
    if (typeof response === 'string') {
        response = JSON.parse(response);
    }
    console.log('avideoResponse', response);
    if (response.error) {
        if (!response.msg) {
            if(typeof response.error === 'string'){
                response.msg = response.error;
            }else{
                response.msg = 'Error';
            }
        }
        avideoAlertError(response.msg);
    } else {
        if (!response.msg) {
            response.msg = 'Success';
        }
        avideoToastSuccess(response.msg);
    }
}

function avideoAlertText(msg) {
    avideoAlert("", msg, '');
}

function avideoAlertInfo(msg) {
    avideoAlert("Info", msg, 'info');
}

function avideoAlertError(msg) {
    avideoAlert("Error", msg, 'error');
}
function avideoAlertSuccess(msg) {
    avideoAlert("Success", msg, 'success');
}

function avideoTooltip(selector, text) {
    $(selector).attr('title', text);
    $(selector).attr('data-toggle', 'tooltip');
    $(selector).attr('data-original-title', text);
    $(selector).tooltip({html: true});
}

function fixAdSize() {
    ad_container = $('#mainVideo_ima-ad-container');
    if (ad_container.length) {
        height = ad_container.css('height');
        width = ad_container.css('width');
        $($('#mainVideo_ima-ad-container div:first-child')[0]).css({'height': height});
        $($('#mainVideo_ima-ad-container div:first-child')[0]).css({'width': width});
    }
}

function playerIsPlayingAds() {
    return ($("#mainVideo_ima-ad-container").length && $("#mainVideo_ima-ad-container").is(':visible'));
}

function playerHasAds() {
    return ($("#mainVideo_ima-ad-container").length > 0);
}

function pauseIfIsPlayinAds() { // look like the mobile does not know if is playing ads
    if (!isMobile() && !player.paused() && playerHasAds() && playerIsPlayingAds()) {
        player.pause();
    }
}

function countTo(selector, total) {
    var text = $(selector).text();
    if (isNaN(text)) {
        current = 0;
    } else {
        current = parseInt(text);
    }
    total = parseInt(total);
    if (!total || current >= total) {
        $(selector).removeClass('loading');
        return;
    }
    var rest = (total - current);
    var step = parseInt(rest / 100);
    if (step < 1) {
        step = 1;
    }
    current += step;
    $(selector).text(current);
    var timeout = (500 / rest);
    setTimeout(function () {
        countTo(selector, total);
    }, timeout);
}

if (typeof showPleaseWaitTimeOut == 'undefined') {
    var showPleaseWaitTimeOut = 0;
}

var tabsCategoryDocumentHeight = 0;
function tabsCategoryDocumentHeightChanged() {
    var newHeight = $(document).height();
    if (tabsCategoryDocumentHeight !== newHeight) {
        tabsCategoryDocumentHeight = newHeight;
        return true;
    }
    return false;
}

function checkDescriptionArea() {
    $(".descriptionArea").each(function (index) {
        if ($(this).height() < $(this).find('.descriptionAreaContent').height()) {
            $(this).find('.descriptionAreaShowMoreBtn').show();
        }
    });
}
$(document).ready(function () {
//animateChilds('#sideBarContainer > ul', 'animate__bounceInLeft', 0.05);
//animateChilds('#uploadMenu', 'animate__bounceIn', 0.05);
//animateChilds('#myNavbar > ul > li.dropdown > ul > div.btn-group.btn-group-justified', 'animate__bounceIn', 0.1);
//animateChilds('#lastItemOnMenu > div.navbar-header > ul > li > div > ul', 'animate__bounceInRight', 0.05);
//animateChilds('.gallerySectionContent, .categoriesContainerItem .clearfix', 'animate__fadeInUp', 0.05);
//animateChilds('#videosList', 'animate__bounceInRight', 0.1);
    addViewFromCookie();
    checkDescriptionArea();
    setInterval(function () {// check for the carousel
        checkDescriptionArea();
    }, 3000);
    Cookies.set('timezone', Intl.DateTimeFormat().resolvedOptions().timeZone, {
        path: '/',
        expires: 365
    });
    tabsCategoryDocumentHeight = $(document).height();
    if (typeof $('.nav-tabs-horizontal').scrollingTabs == 'function') {
        $('.nav-tabs-horizontal').scrollingTabs();
        //$('.nav-tabs-horizontal').fadeIn();
    }
    setInterval(function () {
        if (tabsCategoryDocumentHeightChanged()) {
            if (typeof $('.nav-tabs-horizontal').scrollingTabs == 'function') {
                $('.nav-tabs-horizontal').scrollingTabs('refresh');
            }
        }
    }, 1000);
    modal = modal || (function () {
        var pleaseWaitDiv = $("#pleaseWaitDialog");
        if (pleaseWaitDiv.length === 0) {
            if (typeof avideoLoader == 'undefined') {
                avideoLoader = '';
            }
            pleaseWaitDiv = $('<div id="pleaseWaitDialog" class="modal fade"  data-backdrop="static" data-keyboard="false">' + avideoLoader + '<h2 style="display:none;">Processing...</h2><div class="progress" style="display:none;"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div></div></div>').appendTo('body');
        }

        return {
            showPleaseWait: function () {
                if (pleaseWaitIsINUse) {
                    return false;
                }
                $('#pleaseWaitDialog').removeClass('loaded');
                $('#pleaseWaitDialog').find('.progress').hide();
                this.setText('Processing...');
                $('#pleaseWaitDialog').find('h2').hide();
                this.setProgress(0);
                $('#pleaseWaitDialog').find('.progress').hide();
                pleaseWaitIsINUse = true;
                pleaseWaitDiv.modal();
            },
            hidePleaseWait: function () {
                setTimeout(function () {
                    $('#pleaseWaitDialog').addClass('loaded');
                    ;
                }, showPleaseWaitTimeOut / 2);
                setTimeout(function () {
                    pleaseWaitDiv.modal('hide');
                }, showPleaseWaitTimeOut); // wait for loader animation
                pleaseWaitIsINUse = false;
            },
            setProgress: function (valeur) {
                var element = $('#pleaseWaitDialog').find('.progress');
                console.log('showPleaseWait setProgress', element);
                element.slideDown();
                $('#pleaseWaitDialog').find('.progress-bar').css('width', valeur + '%').attr('aria-valuenow', valeur);
            },
            setText: function (text) {
                var element = $('#pleaseWaitDialog').find('h2');
                console.log('showPleaseWait setText', element);
                element.slideDown();
                element.html(text);
            },
        };
    })();
    try {
        $('[data-toggle="popover"]').popover();
    } catch (e) {

    }

    setInterval(function () {
        setToolTips();
    }, 1000);
    $(".thumbsImage").on("mouseenter", function () {
        gifId = $(this).find(".thumbsGIF").attr('id');
        $(".thumbsGIF").fadeOut();
        if (gifId != undefined) {
            id = gifId.replace('thumbsGIF', '');
            var gif = $(this).find(".thumbsGIF");
            var jpg = $(this).find(".thumbsGIF");
            gif.height(jpg.height());
            gif.width(jpg.width());
            try {
                gif.lazy({effect: 'fadeIn'});
            } catch (e) {
            }
            gif.stop(true, true).fadeIn();
        }
    });
    $(".thumbsImage").on("mouseleave", function () {
        $(this).find(".thumbsGIF").stop(true, true).fadeOut();
    });
    lazyImage();
    $("a").each(function () {
        var location = window.location.toString()
        var res = location.split("?");
        pathWitoutGet = res[0];
        if ($(this).attr("href") == window.location.pathname
                || $(this).attr("href") == window.location
                || $(this).attr("href") == pathWitoutGet) {
            $(this).addClass("selected");
        }
    });
    $('#clearCache, .clearCacheButton').on('click', function (ev) {
        ev.preventDefault();
        clearCache(true, 0, 0);
    });
    $('.clearCacheFirstPageButton').on('click', function (ev) {
        ev.preventDefault();
        clearCache(true, 1, 0);
    });
    $('#generateSiteMap, .generateSiteMapButton').on('click', function (ev) {
        ev.preventDefault();
        modal.showPleaseWait();
        $.ajax({
            url: webSiteRootURL + 'objects/configurationGenerateSiteMap.json.php',
            success: function (response) {
                if (!response.error) {
                    avideoAlert("Congratulations!", "File created!", "success");
                } else {
                    if (response.msg) {
                        avideoAlert("Sorry!", response.msg, "error");
                    } else {
                        avideoAlert("Sorry!", "File NOT created!", "error");
                    }
                }
                modal.hidePleaseWait();
            }
        });
    });
    setPlayerListners();
    $('.duration:contains("00:00:00"), .duration:contains("EE:EE:EE")').hide();
    setInterval(function () {
        if (typeof conn != 'undefined') {
            if (avideoSocketIsActive()) {
                $(".socketStatus").removeClass('disconnected');
            } else {
                $(".socketStatus").addClass('disconnected');
            }
        }

    }, 1000);
    $("input.saveCookie").each(function () {
        var mycookie = Cookies.get($(this).attr('name'));
        if (mycookie && mycookie == "true") {
            $(this).prop('checked', mycookie);
        }
    });
    $("input.saveCookie").change(function () {
        var auto = $(this).prop('checked');
        Cookies.set($(this).attr("name"), auto, {
            path: '/',
            expires: 365
        });
    });
    if (isAutoplayEnabled()) {
        $("#autoplay").prop('checked', true);
    }
    $("#autoplay").change(function () {
        checkAutoPlay();
    });
    checkAutoPlay();
    // Code to handle install prompt on desktop
    window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent Chrome 67 and earlier from automatically showing the prompt
        e.preventDefault();
        $('.A2HSInstall').show();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        var beforeinstallprompt = Cookies.get('beforeinstallprompt');
        if (beforeinstallprompt) {
            return false;
        }
        var msg = "<a href='#' onclick='A2HSInstall();'><img src='" + $('[rel="apple-touch-icon"]').attr('href') + "' class='img img-responsive pull-left' style='max-width: 20px; margin-right:5px;'> Add To Home Screen </a>";
        var options = {text: msg, hideAfter: 20000};
        $.toast(options);
        Cookies.set('beforeinstallprompt', 1, {
            path: '/',
            expires: 365
        });
    });
});
function clearCache(showPleaseWait, FirstPage, sessionOnly) {
    if (showPleaseWait) {
        modal.showPleaseWait();
    }
    $.ajax({
        url: webSiteRootURL + 'objects/configurationClearCache.json.php?FirstPage=' + FirstPage + '&sessionOnly=' + sessionOnly,
        success: function (response) {
            if (showPleaseWait) {
                avideoResponse(response);
                modal.hidePleaseWait();
            }
        }
    });
}

function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+:]*)*' + // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
            '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
    return !!pattern.test(str);
}

function isURL(url) {
    return validURL(url);
}
var startTimerInterval = [];
function startTimer(duration, selector, prepend) {
    //console.log('startTimer 1', duration);
    clearInterval(startTimerInterval[selector]);
    var timer = duration;
    startTimerInterval[selector] = setInterval(function () {

        // Time calculations for days, hours, minutes and seconds
        var years = Math.floor(duration / (60 * 60 * 24 * 365));
        var days = Math.floor((duration % (60 * 60 * 24 * 365)) / (60 * 60 * 24));
        var hours = Math.floor((duration % (60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((duration % (60 * 60)) / (60));
        var seconds = Math.floor((duration % (60)));
        // Display the result in the element with id="demo"
        var text = '';
        if (years) {
            text += years + 'y ';
        }
        if (days || text) {
            text += days + 'd ';
        }
        if (hours || text) {
            text += hours + 'h ';
        }
        if (minutes || text) {
            text += minutes + 'm ';
        }
        if (seconds || text) {
            text += seconds + 's ';
        }
        // If the count down is finished, write some text
        if (duration < 0) {
            clearInterval(startTimerInterval[selector]);
            //$(selector).text("EXPIRED");
            startTimerTo(duration * -1, selector);
        } else {
            $(selector).html(prepend + text);
            duration--;
        }

    }, 1000);
}

var startTimerToInterval = [];
function startTimerTo(durationTo, selector) {
    clearInterval(startTimerToInterval[selector]);
    startTimerToInterval[selector] = setInterval(function () {

        // Time calculations for days, hours, minutes and seconds
        var years = Math.floor(durationTo / (60 * 60 * 24 * 365));
        var days = Math.floor((durationTo % (60 * 60 * 24 * 365)) / (60 * 60 * 24));
        var hours = Math.floor((durationTo % (60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((durationTo % (60 * 60)) / (60));
        var seconds = Math.floor((durationTo % (60)));
        // Display the result in the element with id="demo"
        var text = '';
        if (years) {
            text += years + 'y ';
        }
        if (days || text) {
            text += days + 'd ';
        }
        if (hours || text) {
            text += hours + 'h ';
        }
        if (minutes || text) {
            text += minutes + 'm ';
        }
        if (seconds || text) {
            text += seconds + 's ';
        }
        $(selector).text(text);
        durationTo++;
    }, 1000);
}

var startTimerToDateTimeOut = [];
function startTimerToDate(toDate, selector, useDBDate) {
    clearTimeout(startTimerToDateTimeOut[selector]);
    if (typeof _serverTime === 'undefined') {
        //console.log('startTimerToDate _serverTime is undefined');
        getServerTime();
        startTimerToDateTimeOut[selector] = setTimeout(function () {
            startTimerToDate(toDate, selector, useDBDate)
        }, 1000);
        return false;
    }
    if (typeof toDate === 'string') {
        //console.log('startTimerToDate 1 '+toDate);
        toDate = new Date(toDate.replace(/-/g, "/"));
    }
    if (useDBDate) {
        if (typeof _serverDBTimeString !== 'undefined') {
            date2 = new Date(_serverDBTimeString.replace(/-/g, "/"));
            //console.log('startTimerToDate 2 '+date2);
        }
    } else {
        if (typeof _serverTimeString !== 'undefined') {
            date2 = new Date(_serverTimeString.replace(/-/g, "/"));
            //console.log('startTimerToDate 3 '+date2);
        }
    }
    if (typeof date2 === 'undefined') {
        date2 = new Date();
        //console.log('startTimerToDate 4 '+date2);
    }

    var seconds = (toDate.getTime() - date2.getTime()) / 1000;
    //console.log('startTimerToDate toDate', toDate);
    //console.log('startTimerToDate selector', selector);
    //console.log('startTimerToDate seconds', seconds);
    return startTimer(seconds, selector, toDate.toLocaleString() + '<br>');
}

var _timerIndex = 0;
function createTimer(selector) {
    var toDate = $(selector).text();
    var id = $(selector).attr('id');
    if (!id) {
        _timerIndex++;
        id = 'timer_' + _timerIndex;
        $(selector).attr('id', id);
    }

    startTimerToDate(toDate, '#' + id, true);
}

var getServerTimeActive = 0;
function getServerTime() {
    if (getServerTimeActive || _serverTime) {
        return false;
    }
    getServerTimeActive = 1;
    var d = new Date();
    $.ajax({
        url: webSiteRootURL + 'objects/getTimes.json.php',
        success: function (response) {
            _serverTime = response._serverTime;
            _serverDBTime = response._serverDBTime;
            _serverTimeString = response._serverTimeString;
            _serverDBTimeString = response._serverDBTimeString;
            setInterval(function () {
                _serverTime++;
                _serverDBTime++;
                _serverTimeString = new Date(_serverTime * 1000).toISOString().slice(0, 19).replace('T', ' ');
                _serverDBTimeString = new Date(_serverDBTime * 1000).toISOString().slice(0, 19).replace('T', ' ');
            }, 1000);
        }
    });
}

function clearServerTime() {
    _serverTime = null;
    _serverDBTime = null;
    _serverTimeString = null;
    _serverDBTimeString = null;
}

function addGetParam(_url, _key, _value) {
    var param = _key + '=' + escape(_value);
    var sep = '&';
    if (_url.indexOf('?') < 0) {
        sep = '?';
    } else {
        var lastChar = _url.slice(-1);
        if (lastChar == '&')
            sep = '';
        if (lastChar == '?')
            sep = '';
    }
    _url += sep + param;
    _url = removeDuplicatedGetParam(_url);
    return _url;
}

function removeDuplicatedGetParam(_url) {
    var queryParam = _url.replace(/^[^?]+\?/, '');
    if (queryParam == '') {
        return _url;
    }
    var params = queryParam.split('&'),
            results = {};
    for (var i = 0; i < params.length; i++) {
        var temp = params[i].split('='),
                key = temp[0],
                val = temp[1];
        results[key] = val;
    }

    var newQueryParam = [];
    for (var key in results) {
        newQueryParam.push(key + '=' + results[key]);
    }
    var newQueryParamString = newQueryParam.join('&');
    return _url.replace(queryParam, newQueryParamString);
}

function readFileCroppie(input, crop) {
    if ($(input)[0].files && $(input)[0].files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            crop.croppie('bind', {
                url: e.target.result
            }).then(function () {
                console.log('jQuery bind complete');
            });
        }

        reader.readAsDataURL($(input)[0].files[0]);
    } else {
        avideoAlert("Sorry - you're browser doesn't support the FileReader API");
    }
}

function getCroppie(uploadCropObject, callback, width, height) {
    console.log('getCroppie 1', uploadCropObject);
    var ret = uploadCropObject.croppie('result', {type: 'base64', size: {width: width, height: height}, format: 'png'}).then(function (resp) {
        console.log('getCroppie 2 ' + callback, resp);
        eval(callback + "(resp);");
    }).catch(function (err) {
        console.log('cropieError getCroppie => ' + callback, err);
        eval(callback + "(null);");
    });
    console.log('getCroppie 3', ret);
}

async function setToolTips() {
    if (!$('[data-toggle="tooltip"]').not('.alreadyTooltip').length) {
        return false;
    }
    $('[data-toggle="tooltip"]').not('.alreadyTooltip').tooltip({container: 'body', html: true});
    $('[data-toggle="tooltip"]').not('.alreadyTooltip').on('click', function () {
        var t = this;
        setTimeout(function () {
            $(t).tooltip('hide');
        }, 2000);
    });
    $('[data-toggle="tooltip"]').addClass('alreadyTooltip');
}

function avideoSocketIsActive() {
    if (typeof isSocketActive == 'function') {
        return isSocketActive();
    } else {
        return false;
    }
}

function isMediaSiteURL(url) {
    if (validURL(url)) {
        if (url.match(/youtube/i) ||
                url.match(/youtu\.be/i) ||
                url.match(/vimeo/i) ||
                url.match(/dailymotion/i) ||
                url.match(/metacafe/i) ||
                url.match(/vid\.me/i) ||
                url.match(/rutube\.ru/i) ||
                url.match(/ok\.ru/i) ||
                url.match(/streamable/i) ||
                url.match(/twitch/i) ||
                url.match(/evideoEmbed/i) ||
                url.match(/videoEmbeded/i)) {
            return true;
        }
    }
    return false;
}

function avideoSocket() {
    if (typeof parseSocketResponse === 'function') {
        parseSocketResponse();
    }
}

function changeVideoStatus(videos_id, status) {
    modal.showPleaseWait();
    $.ajax({
        url: webSiteRootURL + 'objects/videoStatus.json.php',
        data: {"id": [videos_id], "status": status},
        type: 'post',
        success: function (response) {
            modal.hidePleaseWait();
            if (response.error) {
                avideoToast("Sorry!", response.msg, "error");
            } else {

                for (var item in response.status) {
                    var videos_id = response.status[item].videos_id
                    $(".getChangeVideoStatusButton_" + videos_id).removeClass('status_a');
                    $(".getChangeVideoStatusButton_" + videos_id).removeClass('status_u');
                    $(".getChangeVideoStatusButton_" + videos_id).removeClass('status_i');
                    $(".getChangeVideoStatusButton_" + videos_id).addClass('status_' + response.status[item].status);
                }


            }
        }
    });
}

function avideoAjax(url, data) {
    modal.showPleaseWait();
    $.ajax({
        url: url,
        data: data,
        type: 'post',
        success: function (response) {
            modal.hidePleaseWait();
            if (response.error) {
                avideoAlertError(response.msg);
            } else {
                avideoToastSuccess(response.msg);
                if (typeof response.eval !== 'undefined') {
                    eval(response.eval);
                }
            }
        }
    });
}

function isPlayerUserActive() {
    return $('#mainVideo').hasClass("vjs-user-active");
}

window.addEventListener('beforeunload', function (e) {
//console.log('window.addEventListener(beforeunload');
    _addViewAsync();
}, false);
document.addEventListener('visibilitychange', function () {
    if (document.visibilityState === 'hidden') {
        _addViewAsync();
    }
});
function socketClearSessionCache(json) {
    console.log('socketClearSessionCache', json);
    clearCache(false, 0, 1);
}

function animateChilds(selector, type, delay) {
    var step = delay;
    $(selector).children().each(function () {
        var $currentElement = $(this);
        $currentElement.addClass('animate__animated');
        $currentElement.addClass(type);
        $currentElement.css('-webkit-animation-delay', step + "s");
        $currentElement.css('animation-delay', step + "s");
        step += delay;
    });
}

function goToURLOrAlertError(jsonURL, data) {
    modal.showPleaseWait();
    $.ajax({
        url: jsonURL,
        method: 'POST',
        data: data,
        success: function (response) {
            if (response.error) {
                avideoAlertError(response.msg);
                modal.hidePleaseWait();
            } else if (response.url) {
                if (response.msg) {
                    avideoAlertInfo(response.msg);
                }
                document.location = response.url;
                setTimeout(function () {
                    modal.hidePleaseWait();
                }, 3000)
            } else {
                avideoResponse(response);
                modal.hidePleaseWait();
            }
        }
    });
}

function downloadURLOrAlertError(jsonURL, data, filename) {
    modal.showPleaseWait();
    avideoToastInfo('Converting');
    $.ajax({
        url: jsonURL,
        method: 'POST',
        data: data,
        success: function (response) {
            if (response.error) {
                avideoAlertError(response.msg);
                modal.hidePleaseWait();
            } else if (response.url) {
                if (response.msg) {
                    avideoAlertInfo(response.msg);
                }
                if (isMobile()) {
                    document.location = response.url
                } else {
                    avideoToastInfo('Download start');
                    var loaded = 0;
                    var contentLength = 0;
                    fetch(response.url)
                            .then(response => {
                                avideoToastSuccess('Download Start');
                                const contentEncoding = response.headers.get('content-encoding');
                                const contentLength = response.headers.get(contentEncoding ? 'x-file-size' : 'content-length');
                                if (contentLength === null) {
                                    throw Error('Response size header unavailable');
                                }

                                const total = parseInt(contentLength, 10);
                                let loaded = 0;
                                return new Response(
                                        new ReadableStream({
                                            start(controller) {
                                                const reader = response.body.getReader();
                                                read();
                                                function read() {
                                                    reader.read().then(({done, value}) => {
                                                        if (done) {
                                                            controller.close();
                                                            return;
                                                        }
                                                        loaded += value.byteLength;
                                                        var percentageLoaded = Math.round(loaded / total * 100);
                                                        //console.log(percentageLoaded);
                                                        modal.setProgress(percentageLoaded);
                                                        modal.setText('Downloading ... ' + percentageLoaded + '%');
                                                        controller.enqueue(value);
                                                        read();
                                                    }).catch(error => {
                                                        console.error(error);
                                                        controller.error(error)
                                                    })
                                                }
                                            }
                                        })
                                        );
                            })
                            .then(response => response.blob())
                            .then(blob => {
                                const url = window.URL.createObjectURL(blob);
                                const a = document.createElement('a');
                                a.style.display = 'none';
                                a.href = url;
                                // the filename you want
                                a.download = filename;
                                document.body.appendChild(a);
                                a.click();
                                window.URL.revokeObjectURL(url);
                                modal.hidePleaseWait();
                                avideoToastSuccess('Download complete');
                            })
                            .catch(function (err) {
                                avideoAlertError('Error on download ');
                                console.log(err)
                            });
                }
            } else {
                avideoResponse(response);
                modal.hidePleaseWait();
            }
        }
    });
}

function startGoogleAd(selector) {
    if (isVisibleAndInViewport(selector)) {
        console.log('startGoogleAd', selector);
        try {
            (adsbygoogle = window.adsbygoogle || []).push({});
        } catch (e) {
            console.log('startGoogleAd ERROR', selector, $(selector), e);
        }

    } else {
        setTimeout(function () {
            startGoogleAd(selector);
        }, 1000);
    }
}

function isVisibleAndInViewport(selector) {
    if ($(selector).is(":visible")) {
        var elementTop = $(selector).offset().top;
        var elementBottom = elementTop + $(selector).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    } else {
        return false;
    }
}

function playAudio(mp3) {
    console.log('pling start');
    if (disableChatSound) {
        console.log('pling disableChatSound');
        return false;
    }
    if (!$('#soundEnabled').is(':checked')) {
        console.log('pling soundEnabled unchecked');
        return false;
    }
    if (!plingEnabled) {
        console.log('pling plingEnabled NOT enabled');
        return false;
    }
    clearTimeout(plingTimeout);
    plingTimeout = setTimeout(function () {
        var audio = new Audio();
        audio.autoplay = true;
        audio.src = "data:audio/mpeg;base64,SUQzBAAAAAABEVRYWFgAAAAtAAADY29tbWVudABCaWdTb3VuZEJhbmsuY29tIC8gTGFTb25vdGhlcXVlLm9yZwBURU5DAAAAHQAAA1N3aXRjaCBQbHVzIMKpIE5DSCBTb2Z0d2FyZQBUSVQyAAAABgAAAzIyMzUAVFNTRQAAAA8AAANMYXZmNTcuODMuMTAwAAAAAAAAAAAAAAD/80DEAAAAA0gAAAAATEFNRTMuMTAwVVVVVVVVVVVVVUxBTUUzLjEwMFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/zQsRbAAADSAAAAABVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/zQMSkAAADSAAAAABVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV";
        audio.src = mp3;
        console.log('pling setTimeout', audio);
        const promise = audio.play();
        if (promise !== undefined) {
            console.log('pling promise', promise);
            promise.then((response) => {
                console.log('pling audio played', response);
                plingEnabled = false;
                setTimeout(function () {
                    plingEnabled = true;
                }, 3000);
            }).catch(error => {
                console.log('pling audio disabled', error);
                if (showEnableAudioMessage) {
                    showEnableAudioMessage = false;
                    avideoAlertInfo('Click here to enable audio');
                }
            });
        }
    }, 500);
}

function isSameDomain(url) {
    var hrefURL, pageURL;
    hrefURL = new URL(url);
    pageURL = new URL(window.location);
    if (url.startsWith("/") || hrefURL.host === pageURL.host) {
        return true;
    }
    return false;
}