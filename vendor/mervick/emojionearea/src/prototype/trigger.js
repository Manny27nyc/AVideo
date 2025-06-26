/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'var/slice',
    'function/trigger',
    'prototype/var/EmojioneArea'
],
function(slice, trigger, EmojioneArea) {
    EmojioneArea.prototype.trigger = function() {
        var args = slice.call(arguments),
            call_args = [this].concat(args.slice(0,1));
        call_args.push(args.slice(1));
        return trigger.apply(this, call_args);
    };
});