/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Turkish translation for bootstrap-wysihtml5
 */
(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define('bootstrap.wysihtml5.tr-TR', ['jquery', 'bootstrap.wysihtml5'], factory);
  } else {
    // Browser globals
    factory(jQuery);
  }
}(function($){
  $.fn.wysihtml5.locale["tr-TR"] = {
    font_styles: {
      normal: "Normal Yazı",
      h1: "Başlık 1",
      h2: "Başlık 2",
      h3: "Başlık 3",
      h4: 'Başlık 4',
      h5: 'Başlık 5',
      h6: 'Başlık 6'
    },
    emphasis: {
      bold: "Kalın",
      italic: "İtalik",
      underline: "Altı Çizili",
      small: 'Küçük'
    },
    lists: {
      unordered: "Sırasız Liste",
      ordered: "Sıralı Liste",
      outdent: "Girintiyi Azalt",
      indent: "Girintiyi Arttır"
    },
    link: {
      insert: "Bağlantı Ekle",
      cancel: "Vazgeç",
      target: 'Bağlantıyı yeni sekmede aç'
    },
    image: {
      insert: "Resim Ekle",
      cancel: "Vazgeç"
    },
    html: {
      edit: "HTML Düzenle"
    },
    colours: {
      black: "Siyah",
      silver: "Gümüş",
      gray: "Gri",
      maroon: "Vişne Çürüğü",
      red: "Kırmızı",
      purple: "Pembe",
      green: "Yeşil",
      olive: "Zeytin Yeşili",
      navy: "Lacivert",
      blue: "Mavi",
      orange: "Turuncu"
    }
  };
}));
