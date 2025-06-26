/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Bulgarian translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.bg-BG', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["bg-BG"] = {
        font_styles: {
            normal: "Нормален текст",
            h1: "Заглавие 1",
            h2: "Заглавие 2",
            h3: "Заглавие 3",
            h4: "Заглавие 4",
            h5: "Заглавие 5",
            h6: "Заглавие 6"
        },
        emphasis: {
            bold: "Удебелен",
            italic: "Курсив",
            underline: "Подчертан"
        },
        lists: {
            unordered: "Неподреден списък",
            ordered: "Подреден списък",
            outdent: "Намали отстояние",
            indent: "Увеличи отстояние"
        },
        link: {
            insert: "Вмъкни връзка",
            cancel: "Отмени"
        },
        image: {
            insert: "Вмъкни картинка",
            cancel: "Отмени"
        },
        html: {
            edit: "Редакртирай HTML"
        },
        colours: {
            black: "Черен",
            silver: "Сребърен",
            gray: "Сив",
            maroon: "Коричневый",
            red: "Червен",
            purple: "Виолетов",
            green: "Зелен",
            olive: "Маслинен",
            navy: "Морско син",
            blue: "Син",
            orange: "Оранжев"
        }
    };
}));

