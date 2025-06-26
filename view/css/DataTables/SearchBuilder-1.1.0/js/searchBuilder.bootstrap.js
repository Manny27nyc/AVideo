/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*! SearchBuilder 1.1.0
 * ©SpryMedia Ltd - datatables.net/license/mit
 */
(function () {
    'use strict';

    /*! Bootstrap ui integration for DataTables' SearchBuilder
     * ©2016 SpryMedia Ltd - datatables.net/license
     */
    (function (factory) {
        if (typeof define === 'function' && define.amd) {
            // AMD
            define(['jquery', 'datatables.net-bs', 'datatables.net-searchbuilder'], function ($) {
                return factory($, window, document);
            });
        }
        else if (typeof exports === 'object') {
            // CommonJS
            module.exports = function (root, $) {
                if (!root) {
                    root = window;
                }
                if (!$ || !$.fn.dataTable) {
                    // eslint-disable-next-line @typescript-eslint/no-var-requires
                    $ = require('datatables.net-bs')(root, $).$;
                }
                if (!$.fn.dataTable.searchBuilder) {
                    // eslint-disable-next-line @typescript-eslint/no-var-requires
                    require('datatables.net-searchbuilder')(root, $);
                }
                return factory($, root, root.document);
            };
        }
        else {
            // Browser
            factory(jQuery, window, document);
        }
    }(function ($, window, document) {
        var dataTable = $.fn.dataTable;
        $.extend(true, dataTable.SearchBuilder.classes, {
            clearAll: 'btn btn-default dtsb-clearAll'
        });
        $.extend(true, dataTable.Group.classes, {
            add: 'btn btn-default dtsb-add',
            clearGroup: 'btn btn-default dtsb-clearGroup',
            logic: 'btn btn-default dtsb-logic'
        });
        $.extend(true, dataTable.Criteria.classes, {
            condition: 'form-control dtsb-condition',
            data: 'form-control dtsb-data',
            "delete": 'btn btn-default dtsb-delete',
            left: 'btn btn-default dtsb-left',
            right: 'btn btn-default dtsb-right',
            value: 'form-control dtsb-value'
        });
        return dataTable.searchPanes;
    }));

}());
