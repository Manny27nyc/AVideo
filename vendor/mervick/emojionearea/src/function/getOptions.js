/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
define([
    'jquery',
    'function/getDefaultOptions',
    'function/isObject'
],
function($, getDefaultOptions, isObject) {
    return function(options) {
        var default_options = getDefaultOptions();
        if (options && options['filters']) {
            var filters = default_options.filters;
            $.each(options['filters'], function(filter, data) {
                if (!isObject(data) || $.isEmptyObject(data)) {
                    delete filters[filter];
                    return;
                }
                $.each(data, function(key, val) {
                    filters[filter][key] = val;
                });
            });
            options['filters'] = filters;
        }
        return $.extend({}, default_options, options);
    };
});