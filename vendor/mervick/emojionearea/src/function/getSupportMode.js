/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([], function() {
    return function(version) {
        switch (version) {
            case '1.5.2': return 0;
            case '2.0.0': return 1;
            case '2.1.0':
            case '2.1.1': return 2;
            case '2.1.2': return 3;
            case '2.1.3':
            case '2.1.4':
            case '2.2.7': return 4;
            case '3.0.1':
            case '3.0.2':
            case '3.0.3':
            case '3.0': return 5;
            case '3.1.0':
            case '3.1.1':
            case '3.1.2':
            case '3.1':
            default: return 6;
        }
    };
});
