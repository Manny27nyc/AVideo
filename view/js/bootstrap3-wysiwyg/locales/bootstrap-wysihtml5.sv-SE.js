/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Swedish translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.sv-SE', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["sv-SE"] = {
        font_styles: {
            normal: "Normal Text",
            h1: "Rubrik 1",
            h2: "Rubrik 2",
            h3: "Rubrik 3"
        },
        emphasis: {
            bold: "Fet",
            italic: "Kursiv",
            underline: "Understruken"
        },
        lists: {
            unordered: "Osorterad lista",
            ordered: "Sorterad lista",
            outdent: "Minska indrag",
            indent: "Öka indrag"
        },
        link: {
            insert: "Lägg till länk",
            cancel: "Avbryt"
        },
        image: {
            insert: "Lägg till Bild",
            cancel: "Avbryt"
        },
        html: {
            edit: "Redigera HTML"
        },
        colours: {
            black: "Svart",
            silver: "Silver",
            gray: "Grå",
            maroon: "Kastaniebrun",
            red: "Röd",
            purple: "Lila",
            green: "Grön",
            olive: "Olivgrön",
            navy: "Marinblå",
            blue: "Blå",
            orange: "Orange"
        }
    };
}));
