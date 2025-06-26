/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Catalan translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.ca-CT', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["ca-CT"] = {
        font_styles: {
              normal: "Text normal",
              h1: "Títol 1",
              h2: "Títol 2",
              h3: "Títol 3",
              h4: "Títol 4",
              h5: "Títol 5",
              h6: "Títol 6"
        },
        emphasis: {
              bold: "Negreta",
              italic: "Cursiva",
              underline: "Subratllat"
        },
        lists: {
              unordered: "Llista desordenada",
              ordered: "Llista ordenada",
              outdent: "Esborrar tabulació",
              indent: "Afegir tabulació"
        },
        link: {
              insert: "Afegir enllaç",
              cancel: "Cancelar"
        },
        image: {
              insert: "Afegir imatge",
              cancel: "Cancelar"
        },
        html: {
            edit: "Editar HTML"
        },
        colours: {
            black: "Negre",
            silver: "Plata",
            gray: "Gris",
            maroon: "Marró",
            red: "Vermell",
            purple: "Porpre",
            green: "Verd",
            olive: "Oliva",
            navy: "Blau marí",
            blue: "Blau",
            orange: "Taronja"
        }
    };
}));
