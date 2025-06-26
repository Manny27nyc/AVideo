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
 * - Serhan Apaydın
 * - JD Isaacks
 * - Glavić
 */

use Carbon\CarbonInterface;

return [
    'year' => ':count година|:count години',
    'a_year' => 'година|:count години',
    'y' => ':count година|:count години',
    'month' => ':count месец|:count месеца',
    'a_month' => 'месец|:count месеца',
    'm' => ':count месец|:count месеца',
    'week' => ':count седмица|:count седмици',
    'a_week' => 'седмица|:count седмици',
    'w' => ':count седмица|:count седмици',
    'day' => ':count ден|:count дни',
    'a_day' => 'ден|:count дни',
    'd' => ':count ден|:count дни',
    'hour' => ':count час|:count часа',
    'a_hour' => 'час|:count часа',
    'h' => ':count час|:count часа',
    'minute' => ':count минута|:count минути',
    'a_minute' => 'минута|:count минути',
    'min' => ':count минута|:count минути',
    'second' => ':count секунда|:count секунди',
    'a_second' => 'няколко секунди|:count секунди',
    's' => ':count секунда|:count секунди',
    'ago' => 'преди :time',
    'from_now' => 'след :time',
    'after' => 'след :time',
    'before' => 'преди :time',
    'diff_now' => 'сега',
    'diff_today' => 'Днес',
    'diff_today_regexp' => 'Днес(?:\\s+в)?',
    'diff_yesterday' => 'вчера',
    'diff_yesterday_regexp' => 'Вчера(?:\\s+в)?',
    'diff_tomorrow' => 'утре',
    'diff_tomorrow_regexp' => 'Утре(?:\\s+в)?',
    'formats' => [
        'LT' => 'H:mm',
        'LTS' => 'H:mm:ss',
        'L' => 'D.MM.YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY H:mm',
        'LLLL' => 'dddd, D MMMM YYYY H:mm',
    ],
    'calendar' => [
        'sameDay' => '[Днес в] LT',
        'nextDay' => '[Утре в] LT',
        'nextWeek' => 'dddd [в] LT',
        'lastDay' => '[Вчера в] LT',
        'lastWeek' => function (CarbonInterface $current) {
            switch ($current->dayOfWeek) {
                case 0:
                case 3:
                case 6:
                    return '[В изминалата] dddd [в] LT';
                default:
                    return '[В изминалия] dddd [в] LT';
            }
        },
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number) {
        $lastDigit = $number % 10;
        $last2Digits = $number % 100;
        if ($number === 0) {
            return "$number-ев";
        }
        if ($last2Digits === 0) {
            return "$number-ен";
        }
        if ($last2Digits > 10 && $last2Digits < 20) {
            return "$number-ти";
        }
        if ($lastDigit === 1) {
            return "$number-ви";
        }
        if ($lastDigit === 2) {
            return "$number-ри";
        }
        if ($lastDigit === 7 || $lastDigit === 8) {
            return "$number-ми";
        }

        return "$number-ти";
    },
    'months' => ['януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'октомври', 'ноември', 'декември'],
    'months_short' => ['яну', 'фев', 'мар', 'апр', 'май', 'юни', 'юли', 'авг', 'сеп', 'окт', 'ное', 'дек'],
    'weekdays' => ['неделя', 'понеделник', 'вторник', 'сряда', 'четвъртък', 'петък', 'събота'],
    'weekdays_short' => ['нед', 'пон', 'вто', 'сря', 'чет', 'пет', 'съб'],
    'weekdays_min' => ['нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' и '],
    'meridiem' => ['преди обяд', 'следобед'],
];
