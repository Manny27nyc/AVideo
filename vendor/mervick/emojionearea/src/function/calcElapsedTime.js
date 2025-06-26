/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define(function() {
    return function(label, blockCallback, condition) {
        var end_at, started_at = performance.now();
        blockCallback.call(this);
        end_at = performance.now();
        if (condition || condition === undefined) {
            console.log("Call to \"" + label + "\" took " + (end_at - started_at) + " milliseconds.")
        }
    }
});