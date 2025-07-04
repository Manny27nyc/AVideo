// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
define([
    'jquery',
    'function/emojioneReady',
    'prototype/var/EmojioneArea'
],
function($, emojioneReady, EmojioneArea) {
    EmojioneArea.prototype.setFocus = function () {
        var self = this;
        emojioneReady(function () {
            self.editor.focus();
        });
        return self;
    };
});