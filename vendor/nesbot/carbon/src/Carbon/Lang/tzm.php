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
 * Authors:
 * - Josh Soref
 * - JD Isaacks
 */
return [
    'year' => '{1}ⴰⵙⴳⴰⵙ|:count ⵉⵙⴳⴰⵙⵏ',
    'month' => '{1}ⴰⵢoⵓⵔ|:count ⵉⵢⵢⵉⵔⵏ',
    'week' => ':count ⵉⵎⴰⵍⴰⵙⵙ',
    'day' => '{1}ⴰⵙⵙ|:count oⵙⵙⴰⵏ',
    'hour' => '{1}ⵙⴰⵄⴰ|:count ⵜⴰⵙⵙⴰⵄⵉⵏ',
    'minute' => '{1}ⵎⵉⵏⵓⴺ|:count ⵎⵉⵏⵓⴺ',
    'second' => '{1}ⵉⵎⵉⴽ|:count ⵉⵎⵉⴽ',
    'ago' => 'ⵢⴰⵏ :time',
    'from_now' => 'ⴷⴰⴷⵅ ⵙ ⵢⴰⵏ :time',
    'diff_today' => 'ⴰⵙⴷⵅ',
    'diff_yesterday' => 'ⴰⵚⴰⵏⵜ',
    'diff_yesterday_regexp' => 'ⴰⵚⴰⵏⵜ(?:\\s+ⴴ)?',
    'diff_tomorrow' => 'ⴰⵙⴽⴰ',
    'diff_tomorrow_regexp' => 'ⴰⵙⴽⴰ(?:\\s+ⴴ)?',
    'diff_today_regexp' => 'ⴰⵙⴷⵅ(?:\\s+ⴴ)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[ⴰⵙⴷⵅ ⴴ] LT',
        'nextDay' => '[ⴰⵙⴽⴰ ⴴ] LT',
        'nextWeek' => 'dddd [ⴴ] LT',
        'lastDay' => '[ⴰⵚⴰⵏⵜ ⴴ] LT',
        'lastWeek' => 'dddd [ⴴ] LT',
        'sameElse' => 'L',
    ],
    'months' => ['ⵉⵏⵏⴰⵢⵔ', 'ⴱⵕⴰⵢⵕ', 'ⵎⴰⵕⵚ', 'ⵉⴱⵔⵉⵔ', 'ⵎⴰⵢⵢⵓ', 'ⵢⵓⵏⵢⵓ', 'ⵢⵓⵍⵢⵓⵣ', 'ⵖⵓⵛⵜ', 'ⵛⵓⵜⴰⵏⴱⵉⵔ', 'ⴽⵟⵓⴱⵕ', 'ⵏⵓⵡⴰⵏⴱⵉⵔ', 'ⴷⵓⵊⵏⴱⵉⵔ'],
    'months_short' => ['ⵉⵏⵏⴰⵢⵔ', 'ⴱⵕⴰⵢⵕ', 'ⵎⴰⵕⵚ', 'ⵉⴱⵔⵉⵔ', 'ⵎⴰⵢⵢⵓ', 'ⵢⵓⵏⵢⵓ', 'ⵢⵓⵍⵢⵓⵣ', 'ⵖⵓⵛⵜ', 'ⵛⵓⵜⴰⵏⴱⵉⵔ', 'ⴽⵟⵓⴱⵕ', 'ⵏⵓⵡⴰⵏⴱⵉⵔ', 'ⴷⵓⵊⵏⴱⵉⵔ'],
    'weekdays' => ['ⴰⵙⴰⵎⴰⵙ', 'ⴰⵢⵏⴰⵙ', 'ⴰⵙⵉⵏⴰⵙ', 'ⴰⴽⵔⴰⵙ', 'ⴰⴽⵡⴰⵙ', 'ⴰⵙⵉⵎⵡⴰⵙ', 'ⴰⵙⵉⴹⵢⴰⵙ'],
    'weekdays_short' => ['ⴰⵙⴰⵎⴰⵙ', 'ⴰⵢⵏⴰⵙ', 'ⴰⵙⵉⵏⴰⵙ', 'ⴰⴽⵔⴰⵙ', 'ⴰⴽⵡⴰⵙ', 'ⴰⵙⵉⵎⵡⴰⵙ', 'ⴰⵙⵉⴹⵢⴰⵙ'],
    'weekdays_min' => ['ⴰⵙⴰⵎⴰⵙ', 'ⴰⵢⵏⴰⵙ', 'ⴰⵙⵉⵏⴰⵙ', 'ⴰⴽⵔⴰⵙ', 'ⴰⴽⵡⴰⵙ', 'ⴰⵙⵉⵎⵡⴰⵙ', 'ⴰⵙⵉⴹⵢⴰⵙ'],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
    'weekend' => [5, 6],
];
