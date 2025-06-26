/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Greek translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.el-GR', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["el-GR"] = {
        font_styles: {
              normal: "Απλό κείμενο",
              h1: "Κεφαλίδα 1",
              h2: "Κεφαλίδα 2",
        	  h3: "Κεφαλίδα 3"	
		},
        emphasis: {
              bold: "B",
              italic: "I",
              underline: "U"
        },
        lists: {
              unordered: "Λίστα με κουκκίδες",
              ordered: "Αριθμημένη λίστα",
              outdent: "Μείωση εσοχής",
              indent: "Αύξηση εσοχής"
        },
        link: {
              insert: "Εισαγωγή Συνδέσμου",
              cancel: "Άκυρο"
        },
        image: {
              insert: "Εισαγωγή Εικόνας",
              cancel: "Άκυρο"
        },
        html: {
            edit: "Επεξεργασία HTML"
        },
        colours: {
            black: "Μαύρο",
            silver: "Ασημί",
            gray: "Γκρι",
            maroon: "Καφέ",
            red: "Κόκκινο",
            purple: "Μωβ",
            green: "Πράσινο",
            olive: "Λαδί",
            navy: "Βαθύ Μπλε",
            blue: "Μπλε",
            orange: "Πορτοκαλί"
        }
    };
}));
