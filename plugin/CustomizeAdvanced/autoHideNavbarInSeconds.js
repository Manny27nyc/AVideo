/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var autoHidingNavbarTimeout;
function autoHideNavbar() {
    //console.log("autoHidingNavbar");
    autoHidingNavbarTimeout = setTimeout(function () {
        $("#mainNavBar").on("show.autoHidingNavbar", function () {
            if ($(window).scrollTop() < 10) {
                $('body').removeClass('nopadding');
            }
        });
        $("#mainNavBar").on("hide.autoHidingNavbar", function () {
            if ($(window).scrollTop() < 10) {
                $('body').addClass('nopadding');
             }
        });
        $("#mainNavBar").autoHidingNavbar("hide");
    }, autoHidingNavbarTimeoutMiliseconds);
}
$(function () {
    if ($("#mainNavBar").length) {
        autoHideNavbar();
        $("#mainNavBar").mouseover(function () {
            //console.log("clearTimeout autoHidingNavbar");
            clearTimeout(autoHidingNavbarTimeout);
        });
        $("#mainNavBar").mouseout(function () {
            autoHideNavbar();
        });
        $(document).mousemove(function (event) {
            if (event.pageY - $(document).scrollTop() <= 10) {
                $("#mainNavBar").autoHidingNavbar("show");
            }
        });
        $("#mainNavBar").on("show.autoHidingNavbar", function () {
            if ($(window).scrollTop() < 10) {
                $('body').removeClass('nopadding');
            }
        });

        $("#mainNavBar").on("hide.autoHidingNavbar", function () {
            if ($(window).scrollTop() < 10) {
                $('body').addClass('nopadding');
             }
        });
    }
});