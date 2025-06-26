/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Polish translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.pl-PL', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["pl-PL"] = {
        font_styles: {
            normal: "Tekst podstawowy",
            h1: "Nagłówek 1",
            h2: "Nagłówek 2",
            h3: "Nagłówek 3",
            h4: "Nagłówek 4",
            h5: "Nagłówek 5",
            h6: "Nagłówek 6"
        },
        emphasis: {
            bold: "Pogrubienie",
            italic: "Kursywa",
            underline: "Podkreślenie"
        },
        lists: {
            unordered: "Lista wypunktowana",
            ordered: "Lista numerowana",
            outdent: "Zmniejsz wcięcie",
            indent: "Zwiększ wcięcie"
        },
        link: {
            insert: "Wstaw odnośnik",
            cancel: "Anuluj",
            target: "Otwórz odnośnik w nowym oknie"
        },
        image: {
            insert: "Wstaw obrazek",
            cancel: "Anuluj"
        },
        html: {
            edit: "Edycja HTML"
        },
        colours: {
            black: "Czarny",
            silver: "Srebrny",
            gray: "Szary",
            maroon: "Kasztanowy",
            red: "Czerwony",
            purple: "Fioletowy",
            green: "Zielony",
            olive: "Oliwkowy",
            navy: "Granatowy",
            blue: "Niebieski",
            orange: "Pomarańczowy"
        }
    };
}));
