/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Polish Translations
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

    $.fn.fileinputLocales['pl'] = {
        fileSingle: 'plik',
        filePlural: 'pliki',
        browseLabel: 'Przeglądaj &hellip;',
        removeLabel: 'Usuń',
        removeTitle: 'Usuń zaznaczone pliki',
        cancelLabel: 'Przerwij',
        cancelTitle: 'Anuluj wysyłanie',
        uploadLabel: 'Wgraj',
        uploadTitle: 'Wgraj zaznaczone pliki',
        msgNo: 'Nie',
        msgNoFilesSelected: 'Brak zaznaczonych plików',
        msgCancelled: 'Odwołany',
        msgZoomModalHeading: 'Szczegółowy podgląd',
        msgFileRequired: 'You must select a file to upload.',
        msgSizeTooSmall: 'Plik "{name}" (<b>{size} KB</b>) jest zbyt mały i musi być większy niż <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'Plik o nazwie "{name}" (<b>{size} KB</b>) przekroczył maksymalną dopuszczalną wielkość pliku wynoszącą <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Minimalna liczba plików do wgrania: <b>{n}</b>.',
        msgFilesTooMany: 'Liczba plików wybranych do wgrania w liczbie <b>({n})</b>, przekracza maksymalny dozwolony limit wynoszący <b>{m}</b>.',
        msgFileNotFound: 'Plik "{name}" nie istnieje!',
        msgFileSecured: 'Ustawienia zabezpieczeń uniemożliwiają odczyt pliku "{name}".',
        msgFileNotReadable: 'Plik "{name}" nie jest plikiem do odczytu.',
        msgFilePreviewAborted: 'Podgląd pliku "{name}" został przerwany.',
        msgFilePreviewError: 'Wystąpił błąd w czasie odczytu pliku "{name}".',
        msgInvalidFileName: 'Nieprawidłowe lub nieobsługiwane znaki w nazwie pliku "{name}".',
        msgInvalidFileType: 'Nieznny typ pliku "{name}". Tylko następujące rodzaje plików są obsługiwane: "{types}".',
        msgInvalidFileExtension: 'Złe rozszerzenie dla pliku "{name}". Tylko następujące rozszerzenia plików są obsługiwane: "{extensions}".',
        msgUploadAborted: 'Przesyłanie pliku zostało przerwane',
        msgUploadThreshold: 'Przetwarzanie...',
        msgUploadBegin: 'Initializing...',
        msgUploadEnd: 'Done',
        msgUploadEmpty: 'No valid data available for upload.',
        msgUploadError: 'Error',
        msgValidationError: 'Błąd walidacji',
        msgLoading: 'Wczytywanie pliku {index} z {files} &hellip;',
        msgProgress: 'Wczytywanie pliku {index} z {files} - {name} - {percent}% zakończone.',
        msgSelected: '{n} Plików zaznaczonych',
        msgFoldersNotAllowed: 'Metodą przeciągnij i upuść, można przenosić tylko pliki. Pominięto {n} katalogów.',
        msgImageWidthSmall: 'Szerokość pliku obrazu "{name}" musi być co najmniej {size} px.',
        msgImageHeightSmall: 'Wysokość pliku obrazu "{name}" musi być co najmniej {size} px.',
        msgImageWidthLarge: 'Szerokość pliku obrazu "{name}" nie może przekraczać {size} px.',
        msgImageHeightLarge: 'Wysokość pliku obrazu "{name}" nie może przekraczać {size} px.',
        msgImageResizeError: 'Nie udało się uzyskać wymiaru obrazu, aby zmienić rozmiar.',
        msgImageResizeException: 'Błąd podczas zmiany rozmiaru obrazu.<pre>{errors}</pre>',
        msgAjaxError: 'Something went wrong with the {operation} operation. Please try again later!',
        msgAjaxProgressError: '{operation} failed',
        ajaxOperations: {
            deleteThumb: 'file delete',
            uploadThumb: 'file upload',
            uploadBatch: 'batch file upload',
            uploadExtra: 'form data upload'
        },
        dropZoneTitle: 'Przeciągnij i upuść pliki tutaj &hellip;',
        dropZoneClickTitle: '<br>(lub kliknij tutaj i wybierz {files} z komputera)',
        fileActionSettings: {
            removeTitle: 'Usuń plik',
            uploadTitle: 'Przesyłanie pliku',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'Pokaż szczegóły',
            dragTitle: 'Przenies / Ponownie zaaranżuj',
            indicatorNewTitle: 'Jeszcze nie przesłanych',
            indicatorSuccessTitle: 'Dodane',
            indicatorErrorTitle: 'Prześlij błąd',
            indicatorLoadingTitle: 'Zamieszczanie ...'
        },
        previewZoomButtonTitles: {
            prev: 'Pokaż poprzedni plik',
            next: 'Pokaż następny plik',
            toggleheader: 'Włącz / wyłącz nagłówek',
            fullscreen: 'Włącz / wyłącz pełny ekran',
            borderless: 'Włącz / wyłącz tryb bez ramek',
            close: 'Zamknij szczegółowy widok'
        }
    };
})(window.jQuery);