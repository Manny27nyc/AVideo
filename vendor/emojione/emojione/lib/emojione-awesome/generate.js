/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
var fs = require('fs');

// Load emojis
var emojis = JSON.parse(fs.readFileSync('../../emoji_strategy.json'), 'utf8');

// Generate .scss mapping
var mapping = '';

for (var key in emojis) {
    if (emojis.hasOwnProperty(key))
        mapping += '"' + key + '": "' + emojis[key].shortname.slice(1, -1) + "\",\n";
}

mapping = "$emoji-map: (\n" + mapping;
mapping = mapping.substr(0, mapping.length - 2) + "\n);";

// Write .scss file
var output_path = '../../lib/emojione-awesome/_emojione-awesome.map.scss';
fs.writeFileSync(output_path, mapping);

console.log('Generated ' + output_path);