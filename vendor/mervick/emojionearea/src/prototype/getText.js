// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
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