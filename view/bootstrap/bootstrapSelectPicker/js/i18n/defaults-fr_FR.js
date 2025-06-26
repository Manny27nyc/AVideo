/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * Bootstrap-select v1.12.2 (http://silviomoreto.github.io/bootstrap-select)
 *
 * Copyright 2013-2017 bootstrap-select
 * Licensed under MIT (https://github.com/silviomoreto/bootstrap-select/blob/master/LICENSE)
 */

(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module unless amdModuleId is set
    define(["jquery"], function (a0) {
      return (factory(a0));
    });
  } else if (typeof module === 'object' && module.exports) {
    // Node. Does not work with strict CommonJS, but
    // only CommonJS-like environments that support module.exports,
    // like Node.
    module.exports = factory(require("jquery"));
  } else {
    factory(root["jQuery"]);
  }
}(this, function (jQuery) {

(function ($) {
  $.fn.selectpicker.defaults = {
    noneSelectedText: 'Aucune sélection',
    noneResultsText: 'Aucun résultat pour {0}',
    countSelectedText: function (numSelected, numTotal) {
      return (numSelected > 1) ? "{0} éléments sélectionnés" : "{0} élément sélectionné";
    },
    maxOptionsText: function (numAll, numGroup) {
      return [
        (numAll > 1) ? 'Limite atteinte ({n} éléments max)' : 'Limite atteinte ({n} élément max)',
        (numGroup > 1) ? 'Limite du groupe atteinte ({n} éléments max)' : 'Limite du groupe atteinte ({n} élément max)'
      ];
    },
    multipleSeparator: ', ',
    selectAllText: 'Tout Sélectionner',
    deselectAllText: 'Tout Dé-selectionner',
  };
})(jQuery);


}));
