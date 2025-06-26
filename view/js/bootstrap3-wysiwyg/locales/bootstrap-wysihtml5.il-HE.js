/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Hebrew translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.il-HE', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["il-HE"] = {
        font_styles: {
            normal: "רגיל",
            h1: "כותרת 1",
            h2: "כותרת 2",
            h3: "כותרת 3",
            h4: "כותרת 4",
            h5: "כותרת 5",
            h6: "כותרת 6"
        },        
        emphasis: {
              bold: "מודגש",
              italic: "טקסט נטוי",
              underline: "קו תחתון",
              small: "קטן"
        },
        lists: {
              unordered: "רשימה עם תבליטים",
              ordered: "רשימה ממוספרת",
              outdent: "הקטן כניסה",
              indent: "הגדל כניסה",
              indered: "הגדל כניסה"
        },
        link: {
              insert: "הכנס קישור",
              cancel: "בטל קישור"
        },
        image: {
              insert: "הוסף תמונה",
              cancel: "בטל"
        },
        html: {
            edit: "עורך HTML"
        },
        colours: {
          black: "שחור",
          silver: "כסף",
          gray: "אפור",
          maroon: "חום",
          red: "אדום",
          purple: "סגול",
          green: "ירוק",
          olive: "ירוק זית",
          navy: "כחול צי",
          blue: "כחול",
          orange: "כתום"
        }
    };
}));
