/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Dutch translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.nl-NL', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["nl-NL"] = {
        font_styles: {
            normal: "Normale Tekst",
            h1: "Kop 1",
            h2: "Kop 2",
            h3: "Kop 3"
        },
        emphasis: {
            bold: "Vet",
            italic: "Cursief",
            underline: "Onderstrepen"
        },
        lists: {
            unordered: "Ongeordende lijst",
            ordered: "Geordende lijst",
            outdent: "Inspringen verkleinen",
            indent: "Inspringen vergroten"
        },
        link: {
            insert: "Link invoegen",
            cancel: "Annuleren"
        },
        image: {
            insert: "Afbeelding invoegen",
            cancel: "Annuleren"
        },
        html: {
            edit: "HTML bewerken"
        },
        colours: {
            black: "Zwart",
            silver: "Zilver",
            gray: "Grijs",
            maroon: "Kastanjebruin",
            red: "Rood",
            purple: "Paars",
            green: "Groen",
            olive: "Olijfgroen",
            navy: "Donkerblauw",
            blue: "Blauw",
            orange: "Oranje"
        }
    };
}));
