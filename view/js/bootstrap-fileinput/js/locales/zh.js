/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Chinese Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 * @author kangqf <kangqingfei@gmail.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['zh'] = {
        fileSingle: '文件',
        filePlural: '个文件',
        browseLabel: '选择 &hellip;',
        removeLabel: '移除',
        removeTitle: '清除选中文件',
        cancelLabel: '取消',
        cancelTitle: '取消进行中的上传',
        uploadLabel: '上传',
        uploadTitle: '上传选中文件',
        msgNo: '没有',
        msgNoFilesSelected: '',
        msgCancelled: '取消',
        msgPlaceholder: 'Select {files}...',
        msgZoomModalHeading: '详细预览',
        msgFileRequired: '必须选择一个文件上传.',
        msgSizeTooSmall: '文件 "{name}" (<b>{size} KB</b>) 必须大于限定大小 <b>{minSize} KB</b>.',
        msgSizeTooLarge: '文件 "{name}" (<b>{size} KB</b>) 超过了允许大小 <b>{maxSize} KB</b>.',
        msgFilesTooLess: '你必须选择最少 <b>{n}</b> {files} 来上传. ',
        msgFilesTooMany: '选择的上传文件个数 <b>({n})</b> 超出最大文件的限制个数 <b>{m}</b>.',
        msgFileNotFound: '文件 "{name}" 未找到!',
        msgFileSecured: '安全限制，为了防止读取文件 "{name}".',
        msgFileNotReadable: '文件 "{name}" 不可读.',
        msgFilePreviewAborted: '取消 "{name}" 的预览.',
        msgFilePreviewError: '读取 "{name}" 时出现了一个错误.',
        msgInvalidFileName: '文件名 "{name}" 包含非法字符.',
        msgInvalidFileType: '不正确的类型 "{name}". 只支持 "{types}" 类型的文件.',
        msgInvalidFileExtension: '不正确的文件扩展名 "{name}". 只支持 "{extensions}" 的文件扩展名.',
        msgFileTypes: {
            'image': 'image',
            'html': 'HTML',
            'text': 'text',
            'video': 'video',
            'audio': 'audio',
            'flash': 'flash',
            'pdf': 'PDF',
            'object': 'object'
        },
        msgUploadAborted: '该文件上传被中止',
        msgUploadThreshold: '处理中...',
        msgUploadBegin: '正在初始化...',
        msgUploadEnd: '完成',
        msgUploadEmpty: '无效的文件上传.',
        msgUploadError: 'Error',
        msgValidationError: '验证错误',
        msgLoading: '加载第 {index} 文件 共 {files} &hellip;',
        msgProgress: '加载第 {index} 文件 共 {files} - {name} - {percent}% 完成.',
        msgSelected: '{n} {files} 选中',
        msgFoldersNotAllowed: '只支持拖拽文件! 跳过 {n} 拖拽的文件夹.',
        msgImageWidthSmall: '图像文件的"{name}"的宽度必须是至少{size}像素.',
        msgImageHeightSmall: '图像文件的"{name}"的高度必须至少为{size}像素.',
        msgImageWidthLarge: '图像文件"{name}"的宽度不能超过{size}像素.',
        msgImageHeightLarge: '图像文件"{name}"的高度不能超过{size}像素.',
        msgImageResizeError: '无法获取的图像尺寸调整。',
        msgImageResizeException: '调整图像大小时发生错误。<pre>{errors}</pre>',
        msgAjaxError: '{operation} 发生错误. 请重试!',
        msgAjaxProgressError: '{operation} 失败',
        ajaxOperations: {
            deleteThumb: '删除文件',
            uploadThumb: '上传文件',
            uploadBatch: '批量上传',
            uploadExtra: '表单数据上传'
        },
        dropZoneTitle: '拖拽文件到这里 &hellip;<br>支持多文件同时上传',
        dropZoneClickTitle: '<br>(或点击{files}按钮选择文件)',
        fileActionSettings: {
            removeTitle: '删除文件',
            uploadTitle: '上传文件',
            uploadRetryTitle: 'Retry upload',
            zoomTitle: '查看详情',
            dragTitle: '移动 / 重置',
            indicatorNewTitle: '没有上传',
            indicatorSuccessTitle: '上传',
            indicatorErrorTitle: '上传错误',
            indicatorLoadingTitle: '上传 ...'
        },
        previewZoomButtonTitles: {
            prev: '预览上一个文件',
            next: '预览下一个文件',
            toggleheader: '缩放',
            fullscreen: '全屏',
            borderless: '无边界模式',
            close: '关闭当前预览'
        }
    };
})(window.jQuery);
