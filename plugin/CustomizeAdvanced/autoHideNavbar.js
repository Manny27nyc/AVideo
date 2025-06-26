/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
$(function () {
    $("#mainNavBar").on("show.autoHidingNavbar", function () {
        if ($(window).scrollTop() < 10) {
            $("body").removeClass("nopadding");
        }
    });

    $("#mainNavBar").on("hide.autoHidingNavbar", function () {
        if ($(window).scrollTop() < 10) {
            $("body").addClass("nopadding");
        }
    });
});