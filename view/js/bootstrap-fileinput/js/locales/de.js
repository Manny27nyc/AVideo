/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput German Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['de'] = {
        fileSingle: 'Datei',
        filePlural: 'Dateien',
        browseLabel: 'Auswählen &hellip;',
        removeLabel: 'Löschen',
        removeTitle: 'Ausgewählte löschen',
        cancelLabel: 'Abbrechen',
        cancelTitle: 'Hochladen abbrechen',
        uploadLabel: 'Hochladen',
        uploadTitle: 'Hochladen der ausgewählten Dateien',
        msgNo: 'Keine',
        msgNoFilesSelected: 'Keine Dateien ausgewählt',
        msgCancelled: 'Abgebrochen',
        msgPlaceholder: '{files} auswählen...',
        msgZoomModalHeading: 'ausführliche Vorschau',
        msgFileRequired: 'Sie müssen eine Datei zum Hochladen auswählen.',
        msgSizeTooSmall: 'Datei "{name}" (<b>{size} KB</b>) unterschreitet mindestens notwendige Upload-Größe von <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'Datei "{name}" (<b>{size} KB</b>) überschreitet maximal zulässige Upload-Größe von <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Sie müssen mindestens <b>{n}</b> {files} zum Hochladen auswählen.',
        msgFilesTooMany: 'Anzahl der zum Hochladen ausgewählten Dateien <b>({n})</b>, überschreitet maximal zulässige Grenze von <b>{m}</b> Stück.',
        msgFileNotFound: 'Datei "{name}" wurde nicht gefunden!',
        msgFileSecured: 'Sicherheitseinstellungen verhindern das Lesen der Datei "{name}".',
        msgFileNotReadable: 'Die Datei "{name}" ist nicht lesbar.',
        msgFilePreviewAborted: 'Dateivorschau abgebrochen für "{name}".',
        msgFilePreviewError: 'Beim Lesen der Datei "{name}" ein Fehler aufgetreten.',
        msgInvalidFileName: 'Ungültige oder nicht unterstützte Zeichen im Dateinamen "{name}".',
        msgInvalidFileType: 'Ungültiger Typ für Datei "{name}". Nur Dateien der Typen "{types}" werden unterstützt.',
        msgInvalidFileExtension: 'Ungültige Erweiterung für Datei "{name}". Nur Dateien mit der Endung "{extensions}" werden unterstützt.',
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
        msgUploadAborted: 'Der Datei-Upload wurde abgebrochen',
        msgUploadThreshold: 'Wird bearbeitet ...',
        msgUploadBegin: 'Wird initialisiert ...',
        msgUploadEnd: 'Erledigt',
        msgUploadEmpty: 'Keine gültigen Daten zum Hochladen verfügbar.',
        msgUploadError: 'Fehler',
        msgValidationError: 'Validierungsfehler',
        msgLoading: 'Lade Datei {index} von {files} hoch&hellip;',
        msgProgress: 'Datei {index} von {files} - {name} - zu {percent}% fertiggestellt.',
        msgSelected: '{n} {files} ausgewählt',
        msgFoldersNotAllowed: 'Drag & Drop funktioniert nur bei Dateien! {n} Ordner übersprungen.',
        msgImageWidthSmall: 'Breite der Bilddatei "{name}" muss mindestens {size} px betragen.',
        msgImageHeightSmall: 'Höhe der Bilddatei "{name}" muss mindestens {size} px betragen.',
        msgImageWidthLarge: 'Breite der Bilddatei "{name}" nicht überschreiten {size} px.',
        msgImageHeightLarge: 'Höhe der Bilddatei "{name}" nicht überschreiten {size} px.',
        msgImageResizeError: 'Konnte nicht die Bildabmessungen zu ändern.',
        msgImageResizeException: 'Fehler beim Ändern der Größe des Bildes.<pre>{errors}</pre>',
        msgAjaxError: 'Bei der Aktion {operation} ist ein Fehler aufgetreten. Bitte versuche es später noch einmal!',
        msgAjaxProgressError: '{operation} fehlgeschlagen',
        ajaxOperations: {
            deleteThumb: 'Datei löschen',
            uploadThumb: 'Datei hochladen',
            uploadBatch: 'Batch-Datei-Upload',
            uploadExtra: 'Formular-Datei-Upload'
        },
        dropZoneTitle: 'Dateien hierher ziehen &hellip;',
        dropZoneClickTitle: '<br>(oder klicken um {files} auszuwählen)',
        fileActionSettings: {
            removeTitle: 'Datei entfernen',
            uploadTitle: 'Datei hochladen',
            uploadRetryTitle: 'Upload erneut versuchen',
            downloadTitle: 'Datei herunterladen',
            zoomTitle: 'Details anzeigen',
            dragTitle: 'Verschieben / Neuordnen',
            indicatorNewTitle: 'Noch nicht hochgeladen',
            indicatorSuccessTitle: 'Hochgeladen',
            indicatorErrorTitle: 'Upload Fehler',
            indicatorLoadingTitle: 'Hochladen ...'
        },
        previewZoomButtonTitles: {
            prev: 'Vorherige Datei anzeigen',
            next: 'Nächste Datei anzeigen',
            toggleheader: 'Header umschalten',
            fullscreen: 'Vollbildmodus umschalten',
            borderless: 'Randlosen Modus umschalten',
            close: 'Detailansicht schließen'
        }
    };
})(window.jQuery);
