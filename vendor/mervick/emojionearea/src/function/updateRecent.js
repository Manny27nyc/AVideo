/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'function/saveSelection',
    'function/pasteHtmlAtCaret',
    'function/shortnameTo',
    'function/getRecent'
],
function(saveSelection, pasteHtmlAtCaret, shortnameTo, getRecent) {
    return function(self, show) {
        var emojis = getRecent();
        if (!self.recent || self.recent !== emojis || show) {
            if (emojis.length) {
                var skinnable = self.scrollArea.is(".skinnable"),
                    scrollTop, height;

                if (!skinnable) {
                    scrollTop = self.scrollArea.scrollTop();
                    if (show) {
                        self.recentCategory.show();
                    }
                    height = self.recentCategory.is(":visible") ? self.recentCategory.height() : 0;
                }

                var items = shortnameTo(emojis, self.emojiBtnTemplate, true).split('|').join('');
                self.recentCategory.children(".emojibtn").remove();
                $(items).insertAfter(self.recentCategory.children(".emojionearea-category-title"));


                self.recentCategory.children(".emojibtn").on("click", function() {
                    self.trigger("emojibtn.click", $(this));
                });

                self.recentFilter.show();

                if (!skinnable) {
                    self.recentCategory.show();

                    var height2 = self.recentCategory.height();

                    if (height !== height2) {
                        self.scrollArea.scrollTop(scrollTop + height2 - height);
                    }
                }
            } else {
                if (self.recentFilter.hasClass("active")) {
                    self.recentFilter.removeClass("active").next().addClass("active");
                }
                self.recentCategory.hide();
                self.recentFilter.hide();
            }
            self.recent = emojis;
        }
    };
});