/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
 * Hungarian translation for bootstrap-wysihtml5
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define('bootstrap.wysihtml5.hu-HU', ['jquery', 'bootstrap.wysihtml5'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function($){
  $.fn.wysihtml5.locale["hu-HU"] = {
    font_styles: {
      normal: "Szövegtörzs",
      h1: "Főcím",
      h2: "Alcím",
      h3: "Harmadrangú alcím",
      h4: "Negyedrangú alcím",
      h5: "Ötödrangú alcím",
      h6: "Hatodrangú alcím"
    },
    emphasis: {
      bold: "Vastag",
      italic: "Dölt",
      underline: "Aláhúzott"
    },
    lists: {
      unordered: "Pontozott lista",
      ordered: "Számozott lista",
      outdent: "Behúzás növelése",
      indent: "Behúzás csökkentése"
    },
    link: {
      insert: "Hivatkozás beszúrása",
      cancel: "Mégsem",
      target: "Hivatkozás megnyitása új ablakban"
    },
    image: {
      insert: "Kép beszúrása",
      cancel: "Mégsem"
    },
    html: {
      edit: "HTML szerkesztése"
    },
    colours: {
      black: "Fekete",
      silver: "Ezüst",
      gray: "Szürke",
      maroon: "Gesztenyebarna",
      red: "Piros",
      purple: "Lila",
      green: "Zöld",
      olive: "Olajzöld",
      navy: "Tengerkék",
      blue: "Kék",
      orange: "Narancs"
    }
  };
}));
