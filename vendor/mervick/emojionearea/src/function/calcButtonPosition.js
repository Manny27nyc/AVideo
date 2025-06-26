/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define(
function() {
    return function() {
        var self = this,
            offset = self.editor[0].offsetWidth - self.editor[0].clientWidth,
            current = parseInt(self.button.css('marginRight'));
        if (current !== offset) {
            self.button.css({marginRight: offset});
            if (self.floatingPicker) {
                self.picker.css({right: parseInt(self.picker.css('right')) - current + offset});
            }
        }
    }
});