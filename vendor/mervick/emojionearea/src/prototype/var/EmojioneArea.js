/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'var/unique',
    'var/eventStorage',
    'var/possibleEvents',
    'function/emojioneReady',
    'function/init',
    'function/loadEmojione'
],
function(unique, eventStorage, possibleEvents, emojioneReady, init, loadEmojione) {
    return function(element, options) {
        var self = this;
        loadEmojione(options);
        eventStorage[self.id = ++unique] = {};
        possibleEvents[self.id] = {};
        emojioneReady(function() {
            init(self, element, options);
        });
    };
});