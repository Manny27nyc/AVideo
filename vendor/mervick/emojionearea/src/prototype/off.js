/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'jquery',
    'var/eventStorage',
    'prototype/var/EmojioneArea'
],
function($, eventStorage, EmojioneArea) {
    EmojioneArea.prototype.off = function(events, handler) {
        if (events) {
            var id = this.id;
            $.each(events.toLowerCase().replace(/_/g, '.').split(' '), function(i, event) {
                if (eventStorage[id][event] && !/^@/.test(event)) {
                    if (handler) {
                        $.each(eventStorage[id][event], function(j, fn) {
                            if (fn === handler) {
                                eventStorage[id][event].splice(j, 1);
                            }
                        });
                    } else {
                        eventStorage[id][event] = [];
                    }
                }
            });
        }
        return this;
    };
});