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
 * - Philippe Vaucher
 * - Andres Ivanov
 * - Tsutomu Kuroda
 * - tjku
 * - Max Melentiev
 * - Juanito Fatas
 * - RM87
 * - Akira Matsuda
 * - Christopher Dell
 * - Enrique Vidal
 * - Simone Carletti
 * - Aaron Patterson
 * - Esko Lehtme
 * - Mart Karu
 * - Nicolás Hock Isaza
 * - Kevin Valdek
 * - Zahhar Kirillov
 * - João Magalhães
 * - Ingmar
 * - Illimar Tambek
 * - Mihkel
 */
return [
    'year' => ':count aasta|:count aastat',
    'y' => ':count a',
    'month' => ':count kuu|:count kuud',
    'm' => ':count k',
    'week' => ':count nädal|:count nädalat',
    'w' => ':count näd',
    'day' => ':count päev|:count päeva',
    'd' => ':count p',
    'hour' => ':count tund|:count tundi',
    'h' => ':count t',
    'minute' => ':count minut|:count minutit',
    'min' => ':count min',
    'second' => ':count sekund|:count sekundit',
    's' => ':count s',
    'ago' => ':time tagasi',
    'from_now' => ':time pärast',
    'after' => ':time pärast',
    'before' => ':time enne',
    'year_from_now' => ':count aasta',
    'month_from_now' => ':count kuu',
    'week_from_now' => ':count nädala',
    'day_from_now' => ':count päeva',
    'hour_from_now' => ':count tunni',
    'minute_from_now' => ':count minuti',
    'second_from_now' => ':count sekundi',
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'diff_now' => 'nüüd',
    'diff_today' => 'täna',
    'diff_yesterday' => 'eile',
    'diff_tomorrow' => 'homme',
    'diff_before_yesterday' => 'üleeile',
    'diff_after_tomorrow' => 'ülehomme',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'D. MMMM YYYY',
        'LLL' => 'D. MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D. MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[täna] LT',
        'nextDay' => '[homme] LT',
        'lastDay' => '[eile] LT',
        'nextWeek' => 'dddd LT',
        'lastWeek' => '[eelmine] dddd LT',
        'sameElse' => 'L',
    ],
    'months' => ['jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember'],
    'months_short' => ['jaan', 'veebr', 'märts', 'apr', 'mai', 'juuni', 'juuli', 'aug', 'sept', 'okt', 'nov', 'dets'],
    'weekdays' => ['pühapäev', 'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev'],
    'weekdays_short' => ['P', 'E', 'T', 'K', 'N', 'R', 'L'],
    'weekdays_min' => ['P', 'E', 'T', 'K', 'N', 'R', 'L'],
    'list' => [', ', ' ja '],
    'meridiem' => ['enne lõunat', 'pärast lõunat'],
];
