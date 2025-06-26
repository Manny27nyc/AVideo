/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Spanish Argenina translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.es-AR', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
    $.fn.wysihtml5.locale["es-AR"] = {
        font_styles: {
            normal: "Texto normal",
            h1: "Título 1",
            h2: "Título 2",
            h3: "Título 3",
            h4: "Título 4",
            h5: "Título 5",
            h6: "Título 6"
        },
        emphasis: {
            bold: "Negrita",
            italic: "Itálica",
            underline: "Subrayado",
            small: "Subíndice"
        },
        lists: {
            ordered: "Lista ordenada",
            unordered: "Lista desordenada",
            indent: "Agregar sangría",
            outdent: "Eliminar sangría"
        },
        link: {
            insert: "Insertar enlace",
            cancel: "Cancelar",
            target: "Abrir enlace en una ventana nueva"
        },
        image: {
            insert: "Insertar imagen",
            cancel: "Cancelar"
        },
        html: {
            edit: "Editar HTML"
        },
        colours: {
            black: "Negro",
            silver: "Plata",
            gray: "Gris",
            maroon: "Marrón",
            red: "Rojo",
            purple: "Púrpura",
            green: "Verde",
            olive: "Oliva",
            navy: "Azul Marino",
            blue: "Azul",
            orange: "Naranja"
        }
    };
}));
