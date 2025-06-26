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
    'meridiem' => ['RW', 'TŊ'],
    'weekdays' => ['Cäŋ kuɔth', 'Jiec la̱t', 'Rɛw lätni', 'Diɔ̱k lätni', 'Ŋuaan lätni', 'Dhieec lätni', 'Bäkɛl lätni'],
    'weekdays_short' => ['Cäŋ', 'Jiec', 'Rɛw', 'Diɔ̱k', 'Ŋuaan', 'Dhieec', 'Bäkɛl'],
    'weekdays_min' => ['Cäŋ', 'Jiec', 'Rɛw', 'Diɔ̱k', 'Ŋuaan', 'Dhieec', 'Bäkɛl'],
    'months' => ['Tiop thar pɛt', 'Pɛt', 'Duɔ̱ɔ̱ŋ', 'Guak', 'Duät', 'Kornyoot', 'Pay yie̱tni', 'Tho̱o̱r', 'Tɛɛr', 'Laath', 'Kur', 'Tio̱p in di̱i̱t'],
    'months_short' => ['Tiop', 'Pɛt', 'Duɔ̱ɔ̱', 'Guak', 'Duä', 'Kor', 'Pay', 'Thoo', 'Tɛɛ', 'Laa', 'Kur', 'Tid'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'L' => 'D/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY h:mm a',
        'LLLL' => 'dddd D MMMM YYYY h:mm a',
    ],

    'year' => ':count jiök', // less reliable
    'y' => ':count jiök', // less reliable
    'a_year' => ':count jiök', // less reliable

    'month' => ':count pay', // less reliable
    'm' => ':count pay', // less reliable
    'a_month' => ':count pay', // less reliable
]);
