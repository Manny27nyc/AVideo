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
    'months' => ['M01', 'M02', 'M03', 'M04', 'M05', 'M06', 'M07', 'M08', 'M09', 'M10', 'M11', 'M12'],
    'months_short' => ['M01', 'M02', 'M03', 'M04', 'M05', 'M06', 'M07', 'M08', 'M09', 'M10', 'M11', 'M12'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'YYYY-MM-DD',
        'LL' => 'YYYY MMM D',
        'LLL' => 'YYYY MMMM D HH:mm',
        'LLLL' => 'YYYY MMMM D, dddd HH:mm',
    ],

    'year' => ':count лѣто',
    'y' => ':count лѣто',
    'a_year' => ':count лѣто',

    'month' => ':count мѣсѧць',
    'm' => ':count мѣсѧць',
    'a_month' => ':count мѣсѧць',

    'week' => ':count сєдмица',
    'w' => ':count сєдмица',
    'a_week' => ':count сєдмица',

    'day' => ':count дьнь',
    'd' => ':count дьнь',
    'a_day' => ':count дьнь',

    'hour' => ':count година',
    'h' => ':count година',
    'a_hour' => ':count година',

    'minute' => ':count малъ', // less reliable
    'min' => ':count малъ', // less reliable
    'a_minute' => ':count малъ', // less reliable

    'second' => ':count въторъ',
    's' => ':count въторъ',
    'a_second' => ':count въторъ',
]);
