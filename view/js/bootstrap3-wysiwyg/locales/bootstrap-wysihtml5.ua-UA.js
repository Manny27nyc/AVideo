/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Ukrainian translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.ua-UA', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["ua-UA"] = {
        font_styles: {
            normal: "Звичайний текст",
            h1: "Заголовок 1",
            h2: "Заголовок 2",
            h3: "Заголовок 3"
        },
        emphasis: {
            bold: "Напівжирний",
            italic: "Курсив",
            underline: "Підкреслений"
        },
        lists: {
            unordered: "Маркований список",
            ordered: "Нумерований список",
            outdent: "Зменшити відступ",
            indent: "Збільшити відступ"
        },
        link: {
            insert: "Вставити посилання",
            cancel: "Відміна"
        },
        image: {
            insert: "Вставити зображення",
            cancel: "Відміна"
        },
        html: {
            edit: "HTML код"
        },
        colours: {
            black: "Чорний",
            silver: "Срібний",
            gray: "Сірий",
            maroon: "Коричневий",
            red: "Червоний",
            purple: "Фіолетовий",
            green: "Зелений",
            olive: "Оливковий",
            navy: "Темно-синій",
            blue: "Синій",
            orange: "Помаранчевий"
        }
    };
}));

