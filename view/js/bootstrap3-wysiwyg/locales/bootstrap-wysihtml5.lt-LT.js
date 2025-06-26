/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Lithuanian translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.lt-LT', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["lt-LT"] = {
        font_styles: {
              normal: "Normalus",
              h1: "Antraštė 1",
              h2: "Antraštė 2",
              h3: "Antraštė 3"
        },
        emphasis: {
              bold: "Pastorintas",
              italic: "Kursyvas",
              underline: "Pabrauktas"
        },
        lists: {
              unordered: "Suženklintas sąrašas",
              ordered: "Numeruotas sąrašas",
              outdent: "Padidinti įtrauką",
              indent: "Sumažinti įtrauką"
        },
        link: {
              insert: "Įterpti nuorodą",
              cancel: "Atšaukti"
        },
        image: {
              insert: "Įterpti atvaizdą",
              cancel: "Atšaukti"
        },
        html: {
            edit: "Redaguoti HTML"
        },
        colours: {
            black: "Juoda",
            silver: "Sidabrinė",
            gray: "Pilka",
            maroon: "Kaštoninė",
            red: "Raudona",
            purple: "Violetinė",
            green: "Žalia",
            olive: "Gelsvai žalia",
            navy: "Tamsiai mėlyna",
            blue: "Mėlyna",
            orange: "Oranžinė"
        }
    };
}));
