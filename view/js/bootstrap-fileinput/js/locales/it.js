// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
/*!
 * FileInput Italian Translation
 * 
 * Author: Lorenzo Milesi <maxxer@yetopen.it>
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

    $.fn.fileinputLocales['it'] = {
        fileSingle: 'file',
        filePlural: 'file',
        browseLabel: 'Sfoglia&hellip;',
        removeLabel: 'Rimuovi',
        removeTitle: 'Rimuovi i file selezionati',
        cancelLabel: 'Annulla',
        cancelTitle: 'Annulla i caricamenti in corso',
        uploadLabel: 'Carica',
        uploadTitle: 'Carica i file selezionati',
        msgNo: 'No',
        msgNoFilesSelected: 'Nessun file selezionato',
        msgCancelled: 'Annullato',
        msgPlaceholder: 'Seleziona {files}...',
        msgZoomModalHeading: 'Anteprima dettagliata',
        msgFileRequired: 'Devi selezionare un file da caricare.',
        msgSizeTooSmall: 'Il file "{name}" (<b>{size} KB</b>) è troppo piccolo, deve essere almeno di <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'Il file "{name}" (<b>{size} KB</b>) eccede la dimensione massima di caricamento di <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Devi selezionare almeno <b>{n}</b> {files} da caricare.',
        msgFilesTooMany: 'Il numero di file selezionati per il caricamento <b>({n})</b> eccede il numero massimo di file accettati <b>{m}</b>.',
        msgFileNotFound: 'File "{name}" non trovato!',
        msgFileSecured: 'Restrizioni di sicurezza impediscono la lettura del file "{name}".',
        msgFileNotReadable: 'Il file "{name}" non è leggibile.',
        msgFilePreviewAborted: 'Generazione anteprima per "{name}" annullata.',
        msgFilePreviewError: 'Errore durante la lettura del file "{name}".',
        msgInvalidFileName: 'Carattere non valido o non supportato nel file "{name}".',
        msgInvalidFileType: 'Tipo non valido per il file "{name}". Sono ammessi solo file di tipo "{types}".',
        msgInvalidFileExtension: 'Estensione non valida per il file "{name}". Sono ammessi solo file con estensione "{extensions}".',
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
        msgUploadAborted: 'Il caricamento del file è stato interrotto',
        msgUploadThreshold: 'In lavorazione...',
        msgUploadBegin: 'Inizializzazione...',
        msgUploadEnd: 'Fatto',
        msgUploadEmpty: 'Dati non disponibili',
        msgUploadError: 'Errore',
        msgValidationError: 'Errore di convalida',
        msgLoading: 'Caricamento file {index} di {files}&hellip;',
        msgProgress: 'Caricamento file {index} di {files} - {name} - {percent}% completato.',
        msgSelected: '{n} {files} selezionati',
        msgFoldersNotAllowed: 'Trascina solo file! Ignorata/e {n} cartella/e.',
        msgImageWidthSmall: 'La larghezza dell\'immagine "{name}" deve essere di almeno {size} px.',
        msgImageHeightSmall: 'L\'altezza dell\'immagine "{name}" deve essere di almeno {size} px.',
        msgImageWidthLarge: 'La larghezza dell\'immagine "{name}" non può superare {size} px.',
        msgImageHeightLarge: 'L\'altezza dell\'immagine "{name}" non può superare {size} px.',
        msgImageResizeError: 'Impossibile ottenere le dimensioni dell\'immagine per ridimensionare.',
        msgImageResizeException: 'Errore durante il ridimensionamento dell\'immagine.<pre>{errors}</pre>',
        msgAjaxError: 'Qualcosa non ha funzionato con l\'operazione {operation}. Per favore riprova più tardi!',
        msgAjaxProgressError: '{operation} failed',
        ajaxOperations: {
            deleteThumb: 'eliminazione file',
            uploadThumb: 'caricamento file',
            uploadBatch: 'caricamento file in batch',
            uploadExtra: 'upload dati del form'
        },
        dropZoneTitle: 'Trascina i file qui&hellip;',
        dropZoneClickTitle: '<br>(o clicca per selezionare {files})',
        fileActionSettings: {
            removeTitle: 'Rimuovere il file',
            uploadTitle: 'Caricare un file',
            uploadRetryTitle: 'Riprova il caricamento',
            downloadTitle: 'Scarica file',
            zoomTitle: 'Guarda i dettagli',
            dragTitle: 'Muovi / Riordina',
            indicatorNewTitle: 'Non ancora caricato',
            indicatorSuccessTitle: 'Caricati',
            indicatorErrorTitle: 'Carica Errore',
            indicatorLoadingTitle: 'Caricamento ...'
        },
        previewZoomButtonTitles: {
            prev: 'Vedi il file precedente',
            next: 'Vedi il file seguente',
            toggleheader: 'Attiva header',
            fullscreen: 'Attiva full screen',
            borderless: 'Abilita modalità senza bordi',
            close: 'Chiudi'
        }
    };
})(window.jQuery);
