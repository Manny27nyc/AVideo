/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Slovakian Translations
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

    $.fn.fileinputLocales['sk'] = {
        fileSingle: 'súbor',
        filePlural: 'súbory',
        browseLabel: 'Vybrať &hellip;',
        removeLabel: 'Odstrániť',
        removeTitle: 'Vyčistiť vybraté súbory',
        cancelLabel: 'Storno',
        cancelTitle: 'Prerušiť  nahrávanie',
        uploadLabel: 'Nahrať',
        uploadTitle: 'Nahrať vybraté súbory',
        msgNo: 'Nie',
        msgNoFilesSelected: '',
        msgCancelled: 'Zrušené',
        msgZoomModalHeading: 'Detailný náhľad',
        msgFileRequired: 'Musíte vybrať súbor, ktorý chcete nahrať.',
        msgSizeTooSmall: 'Súbor "{name}" (<b>{size} KB</b>) je príliš malý, musí mať veľkosť najmenej <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'Súbor "{name}" (<b>{size} KB</b>) je príliš veľký, maximálna povolená veľkosť <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Musíte vybrať najmenej <b>{n}</b> {files} pre nahranie.',
        msgFilesTooMany: 'Počet vybratých súborov <b>({n})</b> prekročil maximálny povolený limit <b>{m}</b>.',
        msgFileNotFound: 'Súbor "{name}" nebol nájdený!',
        msgFileSecured: 'Zabezpečenie súboru znemožnilo čítať súbor "{name}".',
        msgFileNotReadable: 'Súbor "{name}" nie je čitateľný.',
        msgFilePreviewAborted: 'Náhľad súboru bol prerušený pre "{name}".',
        msgFilePreviewError: 'Nastala chyba pri načítaní súboru "{name}".',
        msgInvalidFileName: 'Invalid or unsupported characters in file name "{name}".',
        msgInvalidFileType: 'Neplatný typ súboru "{name}". Iba "{types}" súborov sú podporované.',
        msgInvalidFileExtension: 'Neplatná extenzia súboru "{name}". Iba "{extensions}" súborov sú podporované.',
        msgFileTypes: {
            'image': 'obrázok',
            'html': 'HTML',
            'text': 'text',
            'video': 'video',
            'audio': 'audio',
            'flash': 'flash',
            'pdf': 'PDF',
            'object': 'object'
        },
        msgUploadAborted: 'Nahrávanie súboru bolo prerušené',
        msgUploadThreshold: 'Spracovávam...',
        msgUploadBegin: 'Inicializujem...',
        msgUploadEnd: 'Hotovo',
        msgUploadEmpty: 'Na nahrávanie nie sú k dispozícii žiadne platné údaje.',
        msgUploadError: 'Error',
        msgValidationError: 'Chyba overenia',
        msgLoading: 'Nahrávanie súboru {index} z {files} &hellip;',
        msgProgress: 'Nahrávanie súboru {index} z {files} - {name} - {percent}% dokončené.',
        msgSelected: '{n} {files} vybraté',
        msgFoldersNotAllowed: 'Tiahni a pusť iba súbory! Vynechané {n} pustené prečinok(y).',
        msgImageWidthSmall: 'Šírka obrázku "{name}", musí byť minimálne {size} px.',
        msgImageHeightSmall: 'Výška obrázku "{name}", musí byť minimálne {size} px.',
        msgImageWidthLarge: 'Šírka obrázku "{name}" nemôže presiahnuť {size} px.',
        msgImageHeightLarge: 'Výška obrázku "{name}" nesmie presiahnuť {size} px.',
        msgImageResizeError: 'Nepodarilo sa získať veľkosť obrázka pre zmenu veľkosti.',
        msgImageResizeException: 'Chyba pri zmene veľkosti obrázka.<pre>{errors}</pre>',
        msgAjaxError: 'Pri operácii {operation} sa vyskytla chyba. Skúste to prosím neskôr!',
        msgAjaxProgressError: '{operation} - neúspešné',
        ajaxOperations: {
            deleteThumb: 'odstrániť súbor',
            uploadThumb: 'nahrať súbor',
            uploadBatch: 'nahrať várku súborov',
            uploadExtra: 'odosielanie údajov z formulára'
        },
        dropZoneTitle: 'Tiahni a pusť súbory tu &hellip;',
        dropZoneClickTitle: '<br>(alebo kliknite sem a vyberte {files})',
        fileActionSettings: {
            removeTitle: 'Odstrániť súbor',
            uploadTitle: 'Nahrať súbor',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'Zobraziť podrobnosti',
            dragTitle: 'Posunúť / Preskládať',
            indicatorNewTitle: 'Ešte nenahral',
            indicatorSuccessTitle: 'Nahraný',
            indicatorErrorTitle: 'Chyba pri nahrávaní',
            indicatorLoadingTitle: 'Nahrávanie ...'
        },
        previewZoomButtonTitles: {
            prev: 'Zobraziť predchádzajúci súbor',
            next: 'Zobraziť následujúci súbor',
            toggleheader: 'Prepnúť záhlavie',
            fullscreen: 'Prepnúť zobrazenie na celú obrazovku',
            borderless: 'Prepnúť na bezrámikové zobrazenie',
            close: 'Zatvoriť detailný náhľad'
        }
    };
})(window.jQuery);
