/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Galician Translations
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

    $.fn.fileinputLocales['gl'] = {
        fileSingle: 'arquivo',
        filePlural: 'arquivos',
        browseLabel: 'Examinar &hellip;',
        removeLabel: 'Quitar',
        removeTitle: 'Quitar aquivos seleccionados',
        cancelLabel: 'Cancelar',
        cancelTitle: 'Abortar a subida en curso',
        uploadLabel: 'Subir arquivo',
        uploadTitle: 'Subir arquivos seleccionados',
        msgNo: 'Non',
        msgNoFilesSelected: 'Non hay arquivos seleccionados',
        msgCancelled: 'Cancelado',
        msgPlaceholder: 'Select {files}...',
        msgZoomModalHeading: 'Vista previa detallada',
        msgFileRequired: 'You must select a file to upload.',
        msgSizeTooSmall: 'O arquivo "{name}" (<b>{size} KB</b>) é demasiado pequeño e debe ser maior de <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'El arquivo "{name}" (<b>{size} KB</b>) excede o tamaño máximo permitido de <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Debe seleccionar al menos <b>{n}</b> {files} a cargar.',
        msgFilesTooMany: 'O número de arquivos seleccionados a cargar <b>({n})</b> excede do límite máximo permitido de <b>{m}</b>.',
        msgFileNotFound: 'Arquivo "{name}" non encontrado.',
        msgFileSecured: 'Non é posible acceder o arquivo "{name}" porque estará sendo usado por outra aplicación ou non teñamos permisos de lectura.',
        msgFileNotReadable: 'Non é posible acceder o archivo "{name}".',
        msgFilePreviewAborted: 'Previsualización do arquivo "{name}" cancelada.',
        msgFilePreviewError: 'Ocurriu un erro mentras se lía o arquivo "{name}".',
        msgInvalidFileName: 'Caracteres non válidos o no soportados no nome do arquivos "{name}".',
        msgInvalidFileType: 'Tipo de archivo no válido para "{name}". Sólo se permiten arquivos do tipo "{types}".',
        msgInvalidFileExtension: 'Extensión de arquivo non válido para "{name}". Só se permiten arquivos "{extensions}".',
        msgFileTypes: {
            'image': 'imaxe',
            'html': 'HTML',
            'text': 'text',
            'video': 'video',
            'audio': 'audio',
            'flash': 'flash',
            'pdf': 'PDF',
            'object': 'object'
        },
        msgUploadAborted: 'A carga de arquivos cancelouse',
        msgUploadThreshold: 'Procesando...',
        msgUploadBegin: 'Inicialicando...',
        msgUploadEnd: 'Feito',
        msgUploadEmpty: 'Non existen datos válidos para o envío.',
        msgUploadError: 'Error',
        msgValidationError: 'Erro de validación',
        msgLoading: 'Subindo arquivo {index} de {files} &hellip;',
        msgProgress: 'Subiendo arquivo {index} de {files} - {name} - {percent}% completado.',
        msgSelected: '{n} {files} seleccionado(s)',
        msgFoldersNotAllowed: 'Arrastra e solta únicamente arquivoa. Omitida(s) {n} carpeta(s).',
        msgImageWidthSmall: 'O ancho da imaxe "{name}" debe ser de al menos {size} px.',
        msgImageHeightSmall: 'A altura de la imaxe "{name}" debe ser de al menos {size} px.',
        msgImageWidthLarge: 'El ancho de la imaxe "{name}" no puede exceder de {size} px.',
        msgImageHeightLarge: 'La altura de la imaxe "{name}" no puede exceder de {size} px.',
        msgImageResizeError: 'No se pudieron obtener las dimensiones de la imaxe para cambiar el tamaño.',
        msgImageResizeException: 'Erro o cambiar o tamaño da imaxe.<pre>{errors}</pre>',
        msgAjaxError: 'Algo foi mal ca operación {operation}. Por favor, intentao de novo mais tarde.',
        msgAjaxProgressError: 'A operación {operation} fallou',
        ajaxOperations: {
            deleteThumb: 'Arquivo borrado',
            uploadThumb: 'Arquivo subido',
            uploadBatch: 'Datos subidos en lote',
            uploadExtra: 'Datos do formulario subidos'
        },
        dropZoneTitle: 'Arrasta e solte aquí os arquivos &hellip;',
        dropZoneClickTitle: '<br>(ou fai clic para seleccionar {files})',
        fileActionSettings: {
            removeTitle: 'Eliminar arquivo',
            uploadTitle: 'Subir arquivo',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'Ver detalles',
            dragTitle: 'Mover / Reordenar',
            indicatorNewTitle: 'Non subido todavía',
            indicatorSuccessTitle: 'Subido',
            indicatorErrorTitle: 'Erro o subir',
            indicatorLoadingTitle: 'Subiendo...'
        },
        previewZoomButtonTitles: {
            prev: 'Ver arquivo anterior',
            next: 'Ver arquivo siguinte',
            toggleheader: 'Mostrar encabezado',
            fullscreen: 'Mostrar a pantalla completa',
            borderless: 'Activar o modo sen bordes',
            close: 'Cerrar vista detallada'
        }
    };
})(window.jQuery);
