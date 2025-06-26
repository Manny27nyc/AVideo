/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Chinese Traditional Translations
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

    $.fn.fileinputLocales['zh-TW'] = {
        fileSingle: '單一檔案',
        filePlural: '複選檔案',
        browseLabel: '瀏覽 &hellip;',
        removeLabel: '移除',
        removeTitle: '清除選取檔案',
        cancelLabel: '取消',
        cancelTitle: '取消上傳中檔案',
        uploadLabel: '上傳',
        uploadTitle: '上傳選取檔案',
        msgNo: '沒有',
        msgNoFilesSelected: '',
        msgCancelled: '取消',
        zoomTitle: '詳細資料',
        msgZoomModalHeading: '內容預覽',
        msgFileRequired: 'You must select a file to upload.',
        msgSizeTooSmall: 'File "{name}" (<b>{size} KB</b>) is too small and must be larger than <b>{minSize} KB</b>.',
        msgSizeTooLarge: '檔案 "{name}" (<b>{size} KB</b>) 大小超過上限 <b>{maxSize} KB</b>.',
        msgFilesTooLess: '最少必須選擇 <b>{n}</b> {files} 來上傳. ',
        msgFilesTooMany: '上傳的檔案數量 <b>({n})</b> 超過最大檔案上傳限制 <b>{m}</b>.',
        msgFileNotFound: '檔案 "{name}" 未發現!',
        msgFileSecured: '安全限制，禁止讀取檔案 "{name}".',
        msgFileNotReadable: '文件 "{name}" 不可讀取.',
        msgFilePreviewAborted: '檔案 "{name}" 預覽中止.',
        msgFilePreviewError: '讀取 "{name}" 發生錯誤.',
        msgInvalidFileName: 'Invalid or unsupported characters in file name "{name}".',
        msgInvalidFileType: '檔案類型錯誤 "{name}". 只能使用 "{types}" 類型的檔案.',
        msgInvalidFileExtension: '附檔名錯誤 "{name}". 只能使用 "{extensions}" 的檔案.',
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
        msgUploadAborted: '該文件上傳被中止',
        msgUploadThreshold: 'Processing...',
        msgUploadBegin: 'Initializing...',
        msgUploadEnd: 'Done',
        msgUploadEmpty: 'No valid data available for upload.',
        msgUploadError: 'Error',
        msgValidationError: '驗證錯誤',
        msgLoading: '載入第 {index} 個檔案，共 {files} &hellip;',
        msgProgress: '載入第 {index} 個檔案，共 {files} - {name} - {percent}% 成功.',
        msgSelected: '{n} {files} 選取',
        msgFoldersNotAllowed: '只支援單檔拖曳! 無法使用 {n} 拖拽的資料夹.',
        msgImageWidthSmall: '圖檔寬度"{name}"必須至少為{size}像素(px).',
        msgImageHeightSmall: '圖檔高度"{name}"必須至少為{size}像素(px).',
        msgImageWidthLarge: '圖檔寬度"{name}"不能超過{size}像素(px).',
        msgImageHeightLarge: '圖檔高度"{name}"不能超過{size}像素(px).',
        msgImageResizeError: '無法獲取的圖像尺寸調整。',
        msgImageResizeException: '錯誤而調整圖像大小。<pre>{errors}</pre>',
        msgAjaxError: 'Something went wrong with the {operation} operation. Please try again later!',
        msgAjaxProgressError: '{operation} failed',
        ajaxOperations: {
            deleteThumb: 'file delete',
            uploadThumb: 'file upload',
            uploadBatch: 'batch file upload',
            uploadExtra: 'form data upload'
        },
        dropZoneTitle: '拖曳檔案至此 &hellip;',
        dropZoneClickTitle: '<br>(or click to select {files})',
        fileActionSettings: {
            removeTitle: '刪除檔案',
            uploadTitle: '上傳檔案',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: '詳細資料',
            dragTitle: 'Move / Rearrange',
            indicatorNewTitle: '尚未上傳',
            indicatorSuccessTitle: '上傳成功',
            indicatorErrorTitle: '上傳失敗',
            indicatorLoadingTitle: '上傳中 ...'
        },
        previewZoomButtonTitles: {
            prev: 'View previous file',
            next: 'View next file',
            toggleheader: 'Toggle header',
            fullscreen: 'Toggle full screen',
            borderless: 'Toggle borderless mode',
            close: 'Close detailed preview'
        }
    };
})(window.jQuery);
