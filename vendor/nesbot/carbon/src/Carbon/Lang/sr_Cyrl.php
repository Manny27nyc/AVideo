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
 * - François B
 * - shaishavgandhi05
 * - Serhan Apaydın
 * - JD Isaacks
 * - Glavić
 * - Nikola Zeravcic
 * - Milos Sakovic
 */

use Carbon\CarbonInterface;

return [
    'year' => '{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count године|[0,Inf[:count година',
    'y' => ':count г.',
    'month' => '{1}:count месец|{2,3,4}:count месеца|[0,Inf[:count месеци',
    'm' => ':count м.',
    'week' => '{1}:count недеља|{2,3,4}:count недеље|[0,Inf[:count недеља',
    'w' => ':count нед.',
    'day' => '{1,21,31}:count дан|[0,Inf[:count дана',
    'd' => ':count д.',
    'hour' => '{1,21}:count сат|{2,3,4,22,23,24}:count сата|[0,Inf[:count сати',
    'h' => ':count ч.',
    'minute' => '{1,21,31,41,51}:count минут|[0,Inf[:count минута',
    'min' => ':count мин.',
    'second' => '{1,21,31,41,51}:count секунд|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count секунде|[0,Inf[:count секунди',
    's' => ':count сек.',
    'ago' => 'пре :time',
    'from_now' => 'за :time',
    'after' => ':time након',
    'before' => ':time пре',
    'year_from_now' => '{1,21,31,41,51}:count годину|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count године|[0,Inf[:count година',
    'year_ago' => '{1,21,31,41,51}:count годину|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count године|[0,Inf[:count година',
    'week_from_now' => '{1}:count недељу|{2,3,4}:count недеље|[0,Inf[:count недеља',
    'week_ago' => '{1}:count недељу|{2,3,4}:count недеље|[0,Inf[:count недеља',
    'diff_now' => 'управо сада',
    'diff_today' => 'данас',
    'diff_today_regexp' => 'данас(?:\\s+у)?',
    'diff_yesterday' => 'јуче',
    'diff_yesterday_regexp' => 'јуче(?:\\s+у)?',
    'diff_tomorrow' => 'сутра',
    'diff_tomorrow_regexp' => 'сутра(?:\\s+у)?',
    'diff_before_yesterday' => 'прекјуче',
    'diff_after_tomorrow' => 'прекосутра',
    'formats' => [
        'LT' => 'H:mm',
        'LTS' => 'H:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'D. MMMM YYYY',
        'LLL' => 'D. MMMM YYYY H:mm',
        'LLLL' => 'dddd, D. MMMM YYYY H:mm',
    ],
    'calendar' => [
        'sameDay' => '[данас у] LT',
        'nextDay' => '[сутра у] LT',
        'nextWeek' => function (CarbonInterface $date) {
            switch ($date->dayOfWeek) {
                case 0:
                    return '[у недељу у] LT';
                case 3:
                    return '[у среду у] LT';
                case 6:
                    return '[у суботу у] LT';
                default:
                    return '[у] dddd [у] LT';
            }
        },
        'lastDay' => '[јуче у] LT',
        'lastWeek' => function (CarbonInterface $date) {
            switch ($date->dayOfWeek) {
                case 0:
                    return '[прошле недеље у] LT';
                case 1:
                    return '[прошлог понедељка у] LT';
                case 2:
                    return '[прошлог уторка у] LT';
                case 3:
                    return '[прошле среде у] LT';
                case 4:
                    return '[прошлог четвртка у] LT';
                case 5:
                    return '[прошлог петка у] LT';
                default:
                    return '[прошле суботе у] LT';
            }
        },
        'sameElse' => 'L',
    ],
    'ordinal' => ':number.',
    'months' => ['јануар', 'фебруар', 'март', 'април', 'мај', 'јун', 'јул', 'август', 'септембар', 'октобар', 'новембар', 'децембар'],
    'months_short' => ['јан.', 'феб.', 'мар.', 'апр.', 'мај', 'јун', 'јул', 'авг.', 'сеп.', 'окт.', 'нов.', 'дец.'],
    'weekdays' => ['недеља', 'понедељак', 'уторак', 'среда', 'четвртак', 'петак', 'субота'],
    'weekdays_short' => ['нед.', 'пон.', 'уто.', 'сре.', 'чет.', 'пет.', 'суб.'],
    'weekdays_min' => ['не', 'по', 'ут', 'ср', 'че', 'пе', 'су'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' и '],
    'meridiem' => ['АМ', 'ПМ'],
];
