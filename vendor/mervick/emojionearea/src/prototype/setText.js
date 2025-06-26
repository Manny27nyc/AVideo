/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'jquery',
    'function/emojioneReady',
    'function/htmlFromText',
    'function/textFromHtml',
    'function/trigger',
    'function/calcButtonPosition',
    'prototype/var/EmojioneArea'
],
function($, emojioneReady, htmlFromText, trigger, calcButtonPosition, EmojioneArea) {
    EmojioneArea.prototype.setText = function (str) {
        var self = this;
        emojioneReady(function () {
            self.editor.html(htmlFromText(str, self));
            self.content = self.editor.html();
            trigger(self, 'change', [self.editor]);
            calcButtonPosition.apply(self);
        });
        return self;
    }
});