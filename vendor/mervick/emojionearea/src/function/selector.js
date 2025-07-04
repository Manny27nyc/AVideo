// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
define([
    'var/css_class',
],
function(css_class) {
    return function (prefix, skip_dot) {
        return (skip_dot ? '' : '.') + css_class + (prefix ? ("-" + prefix) : "");
    }
});