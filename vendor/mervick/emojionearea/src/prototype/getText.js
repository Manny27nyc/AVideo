/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'jquery',
    'function/textFromHtml',
    'prototype/var/EmojioneArea'
],
function($, textFromHtml, EmojioneArea) {
    EmojioneArea.prototype.getText = function() {
        return textFromHtml(this.editor.html(), this);
    }
});