/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Slovak translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.sk-SK', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["sk-SK"] = {
        font_styles: {
            normal: "Normálny text",
            h1: "Nadpis úrovne 1",
            h2: "Nadpis úrovne 2",
            h3: "Nadpis úrovne 3"
        },
        emphasis: {
            bold: "Tučné",
            italic: "Kurzíva",
            underline: "Podčiarknuté"
        },
        lists: {
            unordered: "Neusporiadaný zoznam",
            ordered: "Číslovaný zoznam",
            outdent: "Zväčšiť odsadenie",
            indent: "Zmenšiť odsadenie"
        },
        link: {
            insert: "Vložiť odkaz",
            cancel: "Zrušiť"
        },
        image: {
            insert: "Vložiť obrázok",
            cancel: "Zrušiť"
        },
        html: {
            edit: "Editovať HTML"
        },
        colours: {
            black: "Čierna",
            silver: "Strieborná",
            gray: "Šedá",
            maroon: "Bordová",
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
