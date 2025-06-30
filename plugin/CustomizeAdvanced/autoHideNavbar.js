// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
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