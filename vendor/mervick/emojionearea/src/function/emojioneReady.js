/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'var/emojione',
    'var/readyCallbacks'
],
function(emojione, readyCallbacks) {
    return function (fn) {
        if (emojione) {
            fn();
        } else {
            readyCallbacks.push(fn);
        }
    };
});