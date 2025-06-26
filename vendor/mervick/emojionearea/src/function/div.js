/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'jquery',
    'var/slice',
    'function/selector',
    'function/isObject'
],
function($, slice, selector, isObject) {
    return function(prefix) {
        var parent = $('<div/>', isObject(prefix) ? prefix : {"class" : selector(prefix, true)});
        $.each(slice.call(arguments).slice(1), function(i, child) {
            if ($.isFunction(child)) {
                child = child.call(parent);
            }
            if (child) {
                $(child).appendTo(parent);
            }
        });
        return parent;
    }
});