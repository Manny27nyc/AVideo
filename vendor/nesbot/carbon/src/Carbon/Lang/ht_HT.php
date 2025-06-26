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
 * - Sugar Labs // OLPC sugarlabs.org libc-alpha@sourceware.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['janvye', 'fevriye', 'mas', 'avril', 'me', 'jen', 'jiyè', 'out', 'septanm', 'oktòb', 'novanm', 'desanm'],
    'months_short' => ['jan', 'fev', 'mas', 'avr', 'me', 'jen', 'jiy', 'out', 'sep', 'okt', 'nov', 'des'],
    'weekdays' => ['dimanch', 'lendi', 'madi', 'mèkredi', 'jedi', 'vandredi', 'samdi'],
    'weekdays_short' => ['dim', 'len', 'mad', 'mèk', 'jed', 'van', 'sam'],
    'weekdays_min' => ['dim', 'len', 'mad', 'mèk', 'jed', 'van', 'sam'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,

    'year' => ':count lane',
    'y' => ':count lane',
    'a_year' => ':count lane',

    'month' => 'mwa :count',
    'm' => 'mwa :count',
    'a_month' => 'mwa :count',

    'week' => 'semèn :count',
    'w' => 'semèn :count',
    'a_week' => 'semèn :count',

    'day' => ':count jou',
    'd' => ':count jou',
    'a_day' => ':count jou',

    'hour' => ':count lè',
    'h' => ':count lè',
    'a_hour' => ':count lè',

    'minute' => ':count minit',
    'min' => ':count minit',
    'a_minute' => ':count minit',

    'second' => ':count segonn',
    's' => ':count segonn',
    'a_second' => ':count segonn',
]);
