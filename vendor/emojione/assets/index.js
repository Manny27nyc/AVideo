// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
var fs = require('fs');

module.exports = JSON.parse(fs.readFileSync('emoji.json'));