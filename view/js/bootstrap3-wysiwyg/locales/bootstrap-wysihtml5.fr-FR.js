/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * French translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.fr-FR', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
  $.fn.wysihtml5.locale["fr-FR"] = {
    font_styles: {
      normal: "Texte normal",
      h1: "Titre 1",
      h2: "Titre 2",
      h3: "Titre 3",
      h4: "Titre 4",
      h5: "Titre 5",
      h6: "Titre 6"
    },
    emphasis: {
      bold: "Gras",
      italic: "Italique",
      underline: "Souligné",
      small: "Petit"
    },
    lists: {
      unordered: "Liste à puces",
      ordered: "Liste numérotée",
      outdent: "Diminuer le retrait",
      indent: "Augmenter le retrait"
    },
    link: {
      target: "Ouvrir le lien dans une nouvelle fenêtre",
      insert: "Insérer un lien",
      cancel: "Annuler"
    },
    image: {
      insert: "Insérer une image",
      cancel: "Annuler"
    },
    html: {
      edit: "Editer en HTML"
    },
    colours: {
      black: "Noir",
      silver: "Gris clair",
      gray: "Gris",
      maroon: "Marron",
      red: "Rouge",
      purple: "Pourpre",
      green: "Vert",
      olive: "Olive",
      navy: "Bleu marine",
      blue: "Bleu",
      orange: "Orange"
    }
  };
}));
