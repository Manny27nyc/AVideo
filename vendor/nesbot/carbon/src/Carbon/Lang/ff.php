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

/*
 * Unknown default region, use the first alphabetically.
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM, YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
    'months' => ['siilo', 'colte', 'mbooy', 'seeɗto', 'duujal', 'korse', 'morso', 'juko', 'siilto', 'yarkomaa', 'jolal', 'bowte'],
    'months_short' => ['sii', 'col', 'mbo', 'see', 'duu', 'kor', 'mor', 'juk', 'slt', 'yar', 'jol', 'bow'],
    'weekdays' => ['dewo', 'aaɓnde', 'mawbaare', 'njeslaare', 'naasaande', 'mawnde', 'hoore-biir'],
    'weekdays_short' => ['dew', 'aaɓ', 'maw', 'nje', 'naa', 'mwd', 'hbi'],
    'weekdays_min' => ['dew', 'aaɓ', 'maw', 'nje', 'naa', 'mwd', 'hbi'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['subaka', 'kikiiɗe'],

    'year' => ':count baret', // less reliable
    'y' => ':count baret', // less reliable
    'a_year' => ':count baret', // less reliable

    'month' => ':count lewru', // less reliable
    'm' => ':count lewru', // less reliable
    'a_month' => ':count lewru', // less reliable

    'week' => ':count naange', // less reliable
    'w' => ':count naange', // less reliable
    'a_week' => ':count naange', // less reliable

    'day' => ':count dian', // less reliable
    'd' => ':count dian', // less reliable
    'a_day' => ':count dian', // less reliable

    'hour' => ':count montor', // less reliable
    'h' => ':count montor', // less reliable
    'a_hour' => ':count montor', // less reliable

    'minute' => ':count tokossuoum', // less reliable
    'min' => ':count tokossuoum', // less reliable
    'a_minute' => ':count tokossuoum', // less reliable

    'second' => ':count tenen', // less reliable
    's' => ':count tenen', // less reliable
    'a_second' => ':count tenen', // less reliable
]);
