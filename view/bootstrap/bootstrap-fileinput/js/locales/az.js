/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Azerbaijan Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 * @author Elbrus <elbrusnt@gmail.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['az'] = {
        fileSingle: 'fayl',
        filePlural: 'fayl',
        browseLabel: 'Seç &hellip;',
        removeLabel: 'Sil',
        removeTitle: 'Seçilmiş faylları təmizlə',
        cancelLabel: 'İmtina et',
        cancelTitle: 'Cari yükləməni dayandır',
        uploadLabel: 'Yüklə',
        uploadTitle: 'Seçilmiş faylları yüklə',
        msgNo: 'xeyir',
        msgNoFilesSelected: 'Heç bir fayl seçilməmişdir',
        msgCancelled: 'İmtina edildi',
        msgZoomModalHeading: 'İlkin baxış',
        msgFileRequired: 'Yükləmə üçün fayl seçməlisiniz.',
        msgSizeTooSmall: 'Seçdiyiniz "{name}" faylının həcmi (<b>{size} KB</b>)-dır,  minimum <b>{minSize} KB</b> olmalıdır.',
        msgSizeTooLarge: 'Seçdiyiniz "{name}" faylının həcmi (<b>{size} KB</b>)-dır,  maksimum <b>{maxSize} KB</b> olmalıdır.',
        msgFilesTooLess: 'Yükləmə üçün minimum <b>{n}</b> {files} seçməlisiniz.',
        msgFilesTooMany: 'Seçilmiş fayl sayı <b>({n})</b>. Maksimum <b>{m}</b> fayl seçmək mümkündür.',
        msgFileNotFound: 'Fayl "{name}" tapılmadı!',
        msgFileSecured: '"{name}" faylının istifadəsinə yetginiz yoxdur.',
        msgFileNotReadable: '"{name}" faylının istifadəsi mümkün deyil.',
        msgFilePreviewAborted: '"{name}" faylı üçün ilkin baxış ləğv olunub.',
        msgFilePreviewError: '"{name}" faylının oxunması mümkün olmadı.',
        msgInvalidFileName: '"{name}" faylının adında qadağan olunmuş simvollardan istifadə olunmuşdur.',
        msgInvalidFileType: '"{name}" faylının tipi dəstəklənmir. Yalnız "{types}" tipli faylları yükləmək mümkündür.',
        msgInvalidFileExtension: '"{name}" faylının genişlənməsi yanlışdır. Yalnız "{extensions}" fayl genişlənmə(si / ləri) qəbul olunur.',
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
        msgUploadAborted: 'Yükləmə dayandırılmışdır',
        msgUploadThreshold: 'Yükləmə...',
        msgUploadBegin: 'Yoxlama...',
        msgUploadEnd: 'Fayl(lar) yükləndi',
        msgUploadEmpty: 'Yükləmə üçün verilmiş məlumatlar yanlışdır',
        msgUploadError: 'Error',
        msgValidationError: 'Yoxlama nəticəsi səhvir',
        msgLoading: '{files} fayldan {index} yüklənir &hellip;',
        msgProgress: '{files} fayldan {index} - {name} - {percent}% yükləndi.',
        msgSelected: 'Faylların sayı: {n}',
        msgFoldersNotAllowed: 'Ancaq faylların daşınmasına icazə verilir! {n} qovluq yüklənmədi.',
        msgImageWidthSmall: '{name} faylının eni {size} px -dən kiçik olmamalıdır.',
        msgImageHeightSmall: '{name} faylının hündürlüyü {size} px -dən kiçik olmamalıdır.',
        msgImageWidthLarge: '"{name}" faylının eni {size} px -dən böyük olmamalıdır.',
        msgImageHeightLarge: '"{name}" faylının hündürlüyü {size} px -dən böyük olmamalıdır.',
        msgImageResizeError: 'Faylın ölçülərini dəyişmək üçün ölçüləri hesablamaq mümkün olmadı.',
        msgImageResizeException: 'Faylın ölçülərini dəyişmək mümkün olmadı.<pre>{errors}</pre>',
        msgAjaxError: '{operation} əməliyyatı zamanı səhv baş verdi. Təkrar yoxlayın!',
        msgAjaxProgressError: '{operation} əməliyyatı yerinə yetirmək mümkün olmadı.',
        ajaxOperations: {
            deleteThumb: 'faylı sil',
            uploadThumb: 'faylı yüklə',
            uploadBatch: 'bir neçə faylı yüklə',
            uploadExtra: 'məlumatların yüklənməsi'
        },
        dropZoneTitle: 'Faylları bura daşıyın &hellip;',
        dropZoneClickTitle: '<br>(Və ya seçin {files})',
        fileActionSettings: {
            removeTitle: 'Faylı sil',
            uploadTitle: 'Faylı yüklə',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'məlumatlara bax',
            dragTitle: 'Yerini dəyiş və ya sırala',
            indicatorNewTitle: 'Davam edir',
            indicatorSuccessTitle: 'Tamamlandı',
            indicatorErrorTitle: 'Yükləmə xətası',
            indicatorLoadingTitle: 'Yükləmə ...'
        },
        previewZoomButtonTitles: {
            prev: 'Əvvəlki fayla bax',
            next: 'Növbəti fayla bax',
            toggleheader: 'Başlığı dəyiş',
            fullscreen: 'Tam ekranı dəyiş',
            borderless: 'Bölmələrsiz rejimi dəyiş',
            close: 'Ətraflı baxışı bağla'
        }
    };
})(window.jQuery);
