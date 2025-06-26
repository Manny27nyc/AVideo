/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * German translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.de-DE', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
  $.fn.wysihtml5.locale["de-DE"] = {
    font_styles: {
      normal: "Normaler Text",
      h1: "Überschrift 1",
      h2: "Überschrift 2",
      h3: "Überschrift 3",
      h4: "Überschrift 4",
      h5: "Überschrift 5",
      h6: "Überschrift 6"
    },
    emphasis: {
      bold: "Fett",
      italic: "Kursiv",
      underline: "Unterstrichen",
      small: "Klein"
    },
    lists: {
      unordered: "Ungeordnete Liste",
      ordered: "Geordnete Liste",
      outdent: "Einzug verkleinern",
      indent: "Einzug vergrößern"
    },
    link: {
      insert: "Link einfügen",
      cancel: "Abbrechen",
      target: "Link in neuen Fenster öffnen"
    },
    image: {
      insert: "Bild einfügen",
      cancel: "Abbrechen"
    },
    html: {
      edit: "HTML bearbeiten"
    },
    colours: {
      black: "Schwarz",
      silver: "Silber",
      gray: "Grau",
      maroon: "Kastanienbraun",
      red: "Rot",
      purple: "Violett",
      green: "Grün",
      olive: "Olivgrün",
      navy: "Marineblau",
      blue: "Blau",
      orange: "Orange"
    }
  };
}));
