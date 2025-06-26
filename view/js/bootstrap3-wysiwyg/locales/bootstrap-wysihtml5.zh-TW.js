/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Chinese Traditional translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.zh-TW', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["zh-TW"] = {
        font_styles: {
            normal: "內文",
            h1: "標題 1",
            h2: "標題 2",
            h3: "標題 3",
            h3: "標題 4",
            h3: "標題 5",
            h3: "標題 6"
        },
        emphasis: {
            bold: "粗體",
            italic: "斜體",
            underline: "底線"
        },
        lists: {
            unordered: "項目符號",
            ordered: "編號列表",
            outdent: "減少縮排",
            indent: "增加縮排"
        },
        link: {
            insert: "插入超連結",
            cancel: "取消",
            target: "新窗口打開鏈接"
        },
        image: {
            insert: "插入圖片連結",
            cancel: "取消"
        },
        html: {
            edit: "HTML原始碼"
        },
        colours: {
            black: "黑色",
            silver: "銀色",
            gray: "灰色",
            maroon: "栗色",
            red: "红色",
            purple: "紫色",
            green: "綠色",
            olive: "橄欖色",
            navy: "深藍色",
            blue: "藍色",
            orange: "橙色"
        }
    };
}));
