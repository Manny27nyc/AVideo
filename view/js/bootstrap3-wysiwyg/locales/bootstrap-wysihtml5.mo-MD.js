/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Moldavian translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.mo-MD', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["mo-MD"] = {
        font_styles: {
              normal: "Normal",
              h1: "Titlu 1",
              h2: "Titlu 2"
        },
        emphasis: {
              bold: "Bold",
              italic: "Cursiv",
              underline: "Accentuat"
        },
        lists: {
              unordered: "Neordonata",
              ordered: "Ordonata",
              outdent: "Margine",
              indent: "zimțuire"
        },
        link: {
              insert: "Indroduce link-ul",
              cancel: "Anula"
        },
        image: {
              insert: "Insera imagina",
              cancel: "Anula"
        },
        html: {
            edit: "Editare HTML"
        },

        colours: {
            black: "Negru",
            silver: "Argint",
            gray: "Gri",
            maroon: "Castaniu",
            red: "Roșu",
            purple: "Violet",
            green: "Verde",
            olive: "Oliv",
            navy: "Marin",
            blue: "Albastru",
            orange: "Portocaliu"
        }
    };
}));
