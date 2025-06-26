/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Kazakh Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 * @author Kali Toleugazy <almatytol@gmail.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['kz'] = {
        fileSingle: 'файл',
        filePlural: 'файлдар',
        browseLabel: 'Таңдау &hellip;',
        removeLabel: 'Жою',
        removeTitle: 'Таңдалған файлдарды жою',
        cancelLabel: 'Күшін жою',
        cancelTitle: 'Ағымдағы жүктеуді болдырмау',
        uploadLabel: 'Жүктеу',
        uploadTitle: 'Таңдалған файлдарды жүктеу',
        msgNo: 'жоқ',
        msgNoFilesSelected: 'Файл таңдалмады',
        msgCancelled: 'Күші жойылған',
        msgPlaceholder: 'Select {files}...',
        msgZoomModalHeading: 'Алдын ала толық көру',
        msgSizeTooLarge: 'Файл "{name}" (<b>{size} KB</b>) ең үлкен <b>{maxSize} KB</b> өлшемінен асады.',
        msgFilesTooLess: 'Жүктеу үшіy кемінде <b>{n}</b> {files} таңдау керек.',
        msgFilesTooMany: 'Таңдалған <b>({n})</b> файлдардың саны берілген <b>{m}</b> саннан асып кетті.',
        msgFileNotFound: 'Файл "{name}" табылмады!',
        msgFileSecured: 'Шектеу қауіпсіздігі "{name}" файлын оқуға тыйым салады.',
        msgFileNotReadable: '"{name}" файлды оқу мүмкін емес.',
        msgFilePreviewAborted: '"{name}" файл үшін алдын ала қарап көру тыйым салынған.',
        msgFilePreviewError: '"{name}" файлды оқығанда қате пайда болды.',
        msgInvalidFileType: '"{name}" тыйым салынған файл түрі. Тек мынаналарға рұқсат етілген: "{types}"',
        msgInvalidFileExtension: '"{name}" тыйым салынған файл кеңейтімі. Тек "{extensions}" рұқсат.',
        msgUploadAborted: 'Файлды жүктеу доғарылды',
        msgUploadThreshold: 'Өңдеу...',
        msgUploadBegin: 'Initializing...',
        msgUploadEnd: 'Done',
        msgUploadEmpty: 'No valid data available for upload.',
        msgUploadError: 'Error',
        msgValidationError: 'Тексеру қатесі',
        msgLoading: '{index} файлды {files} &hellip; жүктеу',
        msgProgress: '{index} файлды {files} - {name} - {percent}% жүктеу аяқталды.',
        msgSelected: 'Таңдалған файлдар саны: {n}',
        msgFoldersNotAllowed: 'Тек файлдарды сүйреу рұқсат! {n} папка өткізілген.',
        msgImageWidthSmall: '{name} суреттің ені {size} px. аз болмау керек',
        msgImageHeightSmall: '{name} суреттің биіктігі {size} px. аз болмау керек',
        msgImageWidthLarge: '"{name}" суреттің ені {size} px. аспау керек',
        msgImageHeightLarge: '"{name}" суреттің биіктігі {size} px. аспау керек',
        msgImageResizeError: 'Суреттің өлшемін өзгерту үшін, мөлшері алынбады',
        msgImageResizeException: 'Суреттің мөлшерлерін өзгерткен кезде қателік пайда болды.<pre>{errors}</pre>',
        msgAjaxError: 'Something went wrong with the {operation} operation. Please try again later!',
        msgAjaxProgressError: '{operation} failed',
        ajaxOperations: {
            deleteThumb: 'file delete',
            uploadThumb: 'file upload',
            uploadBatch: 'batch file upload',
            uploadExtra: 'form data upload'
        },
        dropZoneTitle: 'Файлдарды осында сүйреу &hellip;',
        dropZoneClickTitle: '<br>(or click to select {files})',
        fileActionSettings: {
            removeTitle: 'Файлды өшіру',
            uploadTitle: 'Файлды жүктеу',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'мәліметтерді көру',
            dragTitle: 'Орнын ауыстыру',
            indicatorNewTitle: 'Жүктелген жоқ',
            indicatorSuccessTitle: 'Жүктелген',
            indicatorErrorTitle: 'Жүктелу қатесі ',
            indicatorLoadingTitle: 'Жүктелу ...'
        },
        previewZoomButtonTitles: {
            prev: 'Алдыңғы файлды қарау',
            next: 'Келесі файлды қарау',
            toggleheader: 'Тақырыпты ауыстыру',
            fullscreen: 'Толық экран режимін қосу',
            borderless: 'Жиексіз режиміне ауысу',
            close: 'Толық көрінісін жабу'
        }
    };
})(window.jQuery);
