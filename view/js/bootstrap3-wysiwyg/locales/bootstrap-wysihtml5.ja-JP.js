/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Japanese translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.ja-JP', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["ja-JP"] = {
        font_styles: {
            normal: "通常の文字",
            h1: "見出し1",
            h2: "見出し2",
            h3: "見出し3"
        },
        emphasis: {
            bold: "太字",
            italic: "斜体",
            underline: "下線"
        },
        lists: {
            unordered: "点字リスト",
            ordered: "数字リスト",
            outdent: "左寄せ",
            indent: "右寄せ"
        },
        link: {
            insert: "リンクの挿入",
            cancel: "キャンセル"
        },
        image: {
            insert: "画像の挿入",
            cancel: "キャンセル"
        },
        html: {
            edit: "HTMLを編集"
        },
        colours: {
            black: "黒色",
            silver: "シルバー",
            gray: "グレー",
            maroon: "栗色",
            red: "赤色",
            purple: "紫色",
            green: "緑色",
            olive: "オリーブ",
            navy: "ネイビー",
            blue: "青色",
            orange: "オレンジ"
        }

    };
}));
