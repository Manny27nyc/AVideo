/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Hungarian Translations
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

    $.fn.fileinputLocales['hu'] = {
        fileSingle: 'fájl',
        filePlural: 'fájlok',
        browseLabel: 'Tallóz &hellip;',
        removeLabel: 'Eltávolít',
        removeTitle: 'Kijelölt fájlok törlése',
        cancelLabel: 'Mégse',
        cancelTitle: 'Feltöltés megszakítása',
        uploadLabel: 'Feltöltés',
        uploadTitle: 'Kijelölt fájlok feltöltése',
        msgNo: 'Nem',
        msgNoFilesSelected: 'Nincs fájl kiválasztva',
        msgCancelled: 'Megszakítva',
        msgPlaceholder: 'Select {files}...',
        msgZoomModalHeading: 'Részletes Előnézet',
        msgFileRequired: 'Kötelező fájlt kiválasztani a feltöltéshez.',
        msgSizeTooSmall: 'A fájl: "{name}" (<b>{size} KB</b>) mérete túl kicsi, nagyobbnak kell lennie, mint <b>{minSize} KB</b>.',
        msgSizeTooLarge: '"{name}" fájl (<b>{size} KB</b>) mérete nagyobb a megengedettnél <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Legalább <b>{n}</b> {files} ki kell választania a feltöltéshez.',
        msgFilesTooMany: 'A feltölteni kívánt fájlok száma <b>({n})</b> elérte a megengedett maximumot <b>{m}</b>.',
        msgFileNotFound: '"{name}" fájl nem található!',
        msgFileSecured: 'Biztonsági beállítások nem engedik olvasni a fájlt "{name}".',
        msgFileNotReadable: '"{name}" fájl nem olvasható.',
        msgFilePreviewAborted: '"{name}" fájl feltöltése megszakítva.',
        msgFilePreviewError: 'Hiba lépett fel a "{name}" fájl olvasása közben.',
        msgInvalidFileName: 'Hibás vagy nem támogatott karakterek a fájl nevében "{name}".',
        msgInvalidFileType: 'Nem megengedett fájl "{name}". Csak a "{types}" fájl típusok támogatottak.',
        msgInvalidFileExtension: 'Nem megengedett kiterjesztés / fájltípus "{name}". Csak a "{extensions}" kiterjesztés(ek) / fájltípus(ok) támogatottak.',
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
        msgUploadAborted: 'A fájl feltöltés megszakítva',
        msgUploadThreshold: 'Folyamatban...',
        msgUploadBegin: 'Inicializálás...',
        msgUploadEnd: 'Kész',
        msgUploadEmpty: 'Nincs érvényes adat a feltöltéshez.',
        msgUploadError: 'Error',
        msgValidationError: 'Érvényesítés hiba',
        msgLoading: '{index} / {files} töltése &hellip;',
        msgProgress: 'Feltöltés: {index} / {files} - {name} - {percent}% kész.',
        msgSelected: '{n} {files} kiválasztva.',
        msgFoldersNotAllowed: 'Csak fájlokat húzzon ide! Kihagyva {n} könyvtár.',
        msgImageWidthSmall: 'A kép szélességének "{name}" legalább {size} pixelnek kell lennie.',
        msgImageHeightSmall: 'A kép magasságának "{name}" legalább {size} pixelnek kell lennie.',
        msgImageWidthLarge: 'A kép szélessége "{name}" nem haladhatja meg a {size} pixelt.',
        msgImageHeightLarge: 'A kép magassága "{name}" nem haladhatja meg a {size} pixelt.',
        msgImageResizeError: 'Nem lehet megállapítani a kép méreteit az átméretezéshez.',
        msgImageResizeException: 'Hiba történt a méretezés közben.<pre>{errors}</pre>',
        msgAjaxError: 'Hiba történt a művelet közben ({operation}). Kérjük, próbálja később!',
        msgAjaxProgressError: 'Hiba! ({operation})',
        ajaxOperations: {
            deleteThumb: 'fájl törlés',
            uploadThumb: 'fájl feltöltés',
            uploadBatch: 'csoportos fájl feltöltés',
            uploadExtra: 'űrlap adat feltöltés'
        },
        dropZoneTitle: 'Húzzon ide fájlokat &hellip;',
        dropZoneClickTitle: '<br>(vagy kattintson ide a {files} tallózásához...)',
        fileActionSettings: {
            removeTitle: 'A fájl eltávolítása',
            uploadTitle: 'fájl feltöltése',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'Részletek megtekintése',
            dragTitle: 'Mozgatás / Átrendezés',
            indicatorNewTitle: 'Nem feltöltött',
            indicatorSuccessTitle: 'Feltöltött',
            indicatorErrorTitle: 'Feltöltés hiba',
            indicatorLoadingTitle: 'Feltöltés ...'
        },
        previewZoomButtonTitles: {
            prev: 'Elöző fájl megnézése',
            next: 'Következő fájl megnézése',
            toggleheader: 'Fejléc mutatása',
            fullscreen: 'Teljes képernyős mód bekapcsolása',
            borderless: 'Keret nélküli ablak mód bekapcsolása',
            close: 'Részletes előnézet bezárása'
        }
    };
})(window.jQuery);
