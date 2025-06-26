/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput <_LANG_> Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['sv'] = {
        fileSingle: 'fil',
        filePlural: 'filer',
        browseLabel: 'Bläddra &hellip;',
        removeLabel: 'Ta bort',
        removeTitle: 'Rensa valda filer',
        cancelLabel: 'Avbryt',
        cancelTitle: 'Avbryt pågående uppladdning',
        uploadLabel: 'Ladda upp',
        uploadTitle: 'Ladda upp valda filer',
        msgNo: 'Nej',
        msgNoFilesSelected: 'Inga filer valda',
        msgCancelled: 'Avbruten',
        msgZoomModalHeading: 'detaljerad förhandsgranskning',
        msgFileRequired: 'You must select a file to upload.',
        msgSizeTooSmall: 'Filen "{name}" (<b>{size} KB</b>) är för liten och måste vara större än <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'File "{name}" (<b>{size} KB</b>) överstiger högsta tillåtna uppladdningsstorlek <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Du måste välja minst <b>{n}</b> {files} för att ladda upp.',
        msgFilesTooMany: 'Antal filer valda för uppladdning <b>({n})</b> överstiger högsta tillåtna gränsen <b>{m}</b>.',
        msgFileNotFound: 'Filen "{name}" kunde inte hittas!',
        msgFileSecured: 'Säkerhetsbegränsningar förhindrar att läsa filen "{name}".',
        msgFileNotReadable: 'Filen "{name}" är inte läsbar.',
        msgFilePreviewAborted: 'Filförhandsvisning avbröts för "{name}".',
        msgFilePreviewError: 'Ett fel uppstod vid inläsning av filen "{name}".',
        msgInvalidFileName: 'Ogiltiga eller tecken som inte stöds i filnamnet "{name}".',
        msgInvalidFileType: 'Ogiltig typ för filen "{name}". Endast "{types}" filtyper stöds.',
        msgInvalidFileExtension: 'Ogiltigt filtillägg för filen "{name}". Endast "{extensions}" filer stöds.',
        msgFileTypes: {
            'image': 'bild',
            'html': 'HTML',
            'text': 'text',
            'video': 'video',
            'audio': 'ljud',
            'flash': 'flash',
            'pdf': 'PDF',
            'object': 'objekt'
        },
        msgUploadAborted: 'Filöverföringen avbröts',
        msgUploadThreshold: 'Bearbetar...',
        msgUploadBegin: 'Påbörjar...',
        msgUploadEnd: 'Färdig',
        msgUploadEmpty: 'Ingen giltig data tillgänglig för uppladdning.',
        msgUploadError: 'Error',
        msgValidationError: 'Valideringsfel',
        msgLoading: 'Laddar fil {index} av {files} &hellip;',
        msgProgress: 'Laddar fil {index} av {files} - {name} - {percent}% färdig.',
        msgSelected: '{n} {files} valda',
        msgFoldersNotAllowed: 'Endast drag & släppfiler! Skippade {n} släpta mappar.',
        msgImageWidthSmall: 'Bredd på bildfilen "{name}" måste minst vara {size} pixlar.',
        msgImageHeightSmall: 'Höjden på bildfilen "{name}" måste minst vara {size} pixlar.',
        msgImageWidthLarge: 'Bredd på bildfil "{name}" kan inte överstiga {size} pixlar.',
        msgImageHeightLarge: 'Höjden på bildfilen "{name}" kan inte överstiga {size} pixlar.',
        msgImageResizeError: 'Det gick inte att hämta bildens dimensioner för att ändra storlek.',
        msgImageResizeException: 'Fel vid storleksändring av bilden.<pre>{errors}</pre>',
        msgAjaxError: 'Något gick fel med {operation} operationen. Försök igen senare!',
        msgAjaxProgressError: '{operation} misslyckades',
        ajaxOperations: {
            deleteThumb: 'file delete',
            uploadThumb: 'file upload',
            uploadBatch: 'batch file upload',
            uploadExtra: 'form data upload'
        },
        dropZoneTitle: 'Drag & släpp filer här &hellip;',
        dropZoneClickTitle: '<br>(eller klicka för att markera {files})',
        fileActionSettings: {
            removeTitle: 'Ta bort fil',
            uploadTitle: 'Ladda upp fil',
            uploadRetryTitle: 'Retry upload',
            zoomTitle: 'Visa detaljer',
            dragTitle: 'Flytta / Ändra ordning',
            indicatorNewTitle: 'Inte uppladdat ännu',
            indicatorSuccessTitle: 'Uppladdad',
            indicatorErrorTitle: 'Uppladdningsfel',
            indicatorLoadingTitle: 'Laddar upp...'
        },
        previewZoomButtonTitles: {
            prev: 'Visa föregående fil',
            next: 'Visa nästa fil',
            toggleheader: 'Rubrik',
            fullscreen: 'Fullskärm',
            borderless: 'Gränslös',
            close: 'Stäng detaljerad förhandsgranskning'
        }
    };
})(window.jQuery);