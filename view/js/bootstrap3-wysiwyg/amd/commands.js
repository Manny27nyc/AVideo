// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
define("bootstrap.wysihtml5.commands", ["wysihtml5"], function(wysihtml5) {

(function(wysihtml5) {
  wysihtml5.commands.small = {
    exec: function(composer, command) {
      return wysihtml5.commands.formatInline.exec(composer, command, "small");
    },

    state: function(composer, command) {
      return wysihtml5.commands.formatInline.state(composer, command, "small");
    }
  };
})(wysihtml5);



});