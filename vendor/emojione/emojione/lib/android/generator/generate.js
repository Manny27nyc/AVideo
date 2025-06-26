/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var util = require("util"),
    fs   = require("fs"),
    _    = require("underscore");


// Load emojis
var emojis = require("../../../emoji_strategy.json");

// Generate Java mapping
var mapping = _(emojis).map(function(data, unicode) {
    // Get codepoints
    var codepoints = _(unicode.split("-")).map(function (code) {
        return "0x" + code;
    });

    return '_shortNameToUnicode.put("' + data.shortname.slice(1, -1) + '", new String(new int[] {' + codepoints.join(',') + '}, 0, ' + codepoints.length + '));';
}).join("\n        ");

// Generate Java class from template
var input  = fs.readFileSync("./Emojione.java");
var output = _(input.toString()).template()({ mapping: mapping });

// Write Java class to file
var output_path = "../com/emojione/Emojione.java";
fs.writeFileSync(output_path, output);

console.log("Generated " + output_path);