/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Arabic translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.ar-AR', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["ar-AR"] = {
        font_styles: {
              normal: "نص عادي",
              h1: "عنوان رئيسي 1",
              h2: "عنوان رئيسي 2",
              h3: "عنوان رئيسي 3",
              h4: "عنوان رئيسي 4",
              h5: "عنوان رئيسي 5",
              h6: "عنوان رئيسي 6"
        },
        emphasis: {
              bold: "عريض",
              italic: "مائل",
              underline: "تحته خط"
        },
        lists: {
              unordered: "قائمة منقطة",
              ordered: "قائمة مرقمة",
              outdent: "محاذاه للخارج",
              indent: "محاذاه للداخل"
        },
        link: {
              insert: "إضافة رابط",
              cancel: "إلغاء"
        },
        image: {
              insert: "إضافة صورة",
              cancel: "إلغاء"
        },
        html: {
            edit: "تعديل HTML"
        },

        colours: {
            black: "أسود",
            silver: "فضي",
            gray: "رمادي",
            maroon: "بني",
            red: "أحمر",
            purple: "بنفسجي",
            green: "أخضر",
            olive: "زيتوني",
            navy: "أزرق قاتم",
            blue: "أزرق نيلي",
            orange: "برتقالي"
        }
    };
}));
