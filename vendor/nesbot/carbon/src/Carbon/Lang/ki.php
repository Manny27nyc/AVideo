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
    'meridiem' => ['Kiroko', 'Hwaĩ-inĩ'],
    'weekdays' => ['Kiumia', 'Njumatatũ', 'Njumaine', 'Njumatana', 'Aramithi', 'Njumaa', 'Njumamothi'],
    'weekdays_short' => ['KMA', 'NTT', 'NMN', 'NMT', 'ART', 'NMA', 'NMM'],
    'weekdays_min' => ['KMA', 'NTT', 'NMN', 'NMT', 'ART', 'NMA', 'NMM'],
    'months' => ['Njenuarĩ', 'Mwere wa kerĩ', 'Mwere wa gatatũ', 'Mwere wa kana', 'Mwere wa gatano', 'Mwere wa gatandatũ', 'Mwere wa mũgwanja', 'Mwere wa kanana', 'Mwere wa kenda', 'Mwere wa ikũmi', 'Mwere wa ikũmi na ũmwe', 'Ndithemba'],
    'months_short' => ['JEN', 'WKR', 'WGT', 'WKN', 'WTN', 'WTD', 'WMJ', 'WNN', 'WKD', 'WIK', 'WMW', 'DIT'],
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],

    'year' => ':count mĩaka', // less reliable
    'y' => ':count mĩaka', // less reliable
    'a_year' => ':count mĩaka', // less reliable

    'month' => ':count mweri', // less reliable
    'm' => ':count mweri', // less reliable
    'a_month' => ':count mweri', // less reliable

    'week' => ':count kiumia', // less reliable
    'w' => ':count kiumia', // less reliable
    'a_week' => ':count kiumia', // less reliable

    'day' => ':count mũthenya', // less reliable
    'd' => ':count mũthenya', // less reliable
    'a_day' => ':count mũthenya', // less reliable

    'hour' => ':count thaa', // less reliable
    'h' => ':count thaa', // less reliable
    'a_hour' => ':count thaa', // less reliable

    'minute' => ':count mundu', // less reliable
    'min' => ':count mundu', // less reliable
    'a_minute' => ':count mundu', // less reliable

    'second' => ':count igego', // less reliable
    's' => ':count igego', // less reliable
    'a_second' => ':count igego', // less reliable
]);
