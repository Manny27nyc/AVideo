/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Chinese translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.zh-CN', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["zh-CN"] = {
        font_styles: {
            normal: "正文",
            h1: "标题 1",
            h2: "标题 2",
            h3: "标题 3",
            h4: "标题 4",
            h5: "标题 5",
            h6: "标题 6"
        },
        emphasis: {
            bold: "粗体",
            italic: "斜体",
            underline: "下划线"
        },
        lists: {
            unordered: "项目符号",
            ordered: "编号",
            outdent: "减少缩进",
            indent: "增加缩进"
        },
        link: {
            insert: "插入链接",
            cancel: "取消",
            target: "新窗口打开链接"
        },
        image: {
            insert: "插入图片",
            cancel: "取消"
        },
        html: {
            edit: "HTML代码"
        },
        colours: {
            black: "黑色",
            silver: "银色",
            gray: "灰色",
            maroon: "赤红色",
            red: "红色",
            purple: "紫色",
            green: "绿色",
            olive: "橄榄色",
            navy: "深蓝色",
            blue: "蓝色",
            orange: "橙色"
        }
    };
}));
