/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array_replace_recursive(require __DIR__.'/en.php', [
    'weekdays' => ['ꕞꕌꔵ', 'ꗳꗡꘉ', 'ꕚꕞꕚ', 'ꕉꕞꕒ', 'ꕉꔤꕆꕢ', 'ꕉꔤꕀꕮ', 'ꔻꔬꔳ'],
    'weekdays_short' => ['ꕞꕌꔵ', 'ꗳꗡꘉ', 'ꕚꕞꕚ', 'ꕉꕞꕒ', 'ꕉꔤꕆꕢ', 'ꕉꔤꕀꕮ', 'ꔻꔬꔳ'],
    'weekdays_min' => ['ꕞꕌꔵ', 'ꗳꗡꘉ', 'ꕚꕞꕚ', 'ꕉꕞꕒ', 'ꕉꔤꕆꕢ', 'ꕉꔤꕀꕮ', 'ꔻꔬꔳ'],
    'months' => ['ꖨꖕ ꕪꕴ ꔞꔀꕮꕊ', 'ꕒꕡꖝꖕ', 'ꕾꖺ', 'ꖢꖕ', 'ꖑꕱ', 'ꖱꘋ', 'ꖱꕞꔤ', 'ꗛꔕ', 'ꕢꕌ', 'ꕭꖃ', 'ꔞꘋꕔꕿ ꕸꖃꗏ', 'ꖨꖕ ꕪꕴ ꗏꖺꕮꕊ'],
    'months_short' => ['ꖨꖕꔞ', 'ꕒꕡ', 'ꕾꖺ', 'ꖢꖕ', 'ꖑꕱ', 'ꖱꘋ', 'ꖱꕞ', 'ꗛꔕ', 'ꕢꕌ', 'ꕭꖃ', 'ꔞꘋ', 'ꖨꖕꗏ'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY h:mm a',
        'LLLL' => 'dddd, D MMMM YYYY h:mm a',
    ],

    'year' => ':count ꕀ', // less reliable
    'y' => ':count ꕀ', // less reliable
    'a_year' => ':count ꕀ', // less reliable

    'second' => ':count ꗱꕞꕯꕊ', // less reliable
    's' => ':count ꗱꕞꕯꕊ', // less reliable
    'a_second' => ':count ꗱꕞꕯꕊ', // less reliable
]);
