// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
define([], function() {
    return function () {
        return localStorage.getItem("recent_emojis") || "";
    }
});