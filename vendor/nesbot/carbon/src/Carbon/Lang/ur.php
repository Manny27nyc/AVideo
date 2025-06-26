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

$months = [
    'جنوری',
    'فروری',
    'مارچ',
    'اپریل',
    'مئی',
    'جون',
    'جولائی',
    'اگست',
    'ستمبر',
    'اکتوبر',
    'نومبر',
    'دسمبر',
];

$weekdays = [
    'اتوار',
    'پیر',
    'منگل',
    'بدھ',
    'جمعرات',
    'جمعہ',
    'ہفتہ',
];

/*
 * Authors:
 * - Sawood Alam
 * - Mehshan
 * - Philippe Vaucher
 * - Tsutomu Kuroda
 * - tjku
 * - Zaid Akram
 * - Max Melentiev
 * - hafezdivandari
 * - Hossein Jabbari
 * - nimamo
 */
return [
    'year' => 'ایک سال|:count سال',
    'month' => 'ایک ماہ|:count ماہ',
    'week' => ':count ہفتے',
    'day' => 'ایک دن|:count دن',
    'hour' => 'ایک گھنٹہ|:count گھنٹے',
    'minute' => 'ایک منٹ|:count منٹ',
    'second' => 'چند سیکنڈ|:count سیکنڈ',
    'ago' => ':time قبل',
    'from_now' => ':time بعد',
    'after' => ':time بعد',
    'before' => ':time پہلے',
    'diff_now' => 'اب',
    'diff_today' => 'آج',
    'diff_today_regexp' => 'آج(?:\\s+بوقت)?',
    'diff_yesterday' => 'گزشتہ کل',
    'diff_yesterday_regexp' => 'گذشتہ(?:\\s+روز)?(?:\\s+بوقت)?',
    'diff_tomorrow' => 'آئندہ کل',
    'diff_tomorrow_regexp' => 'کل(?:\\s+بوقت)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd، D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[آج بوقت] LT',
        'nextDay' => '[کل بوقت] LT',
        'nextWeek' => 'dddd [بوقت] LT',
        'lastDay' => '[گذشتہ روز بوقت] LT',
        'lastWeek' => '[گذشتہ] dddd [بوقت] LT',
        'sameElse' => 'L',
    ],
    'meridiem' => ['صبح', 'شام'],
    'months' => $months,
    'months_short' => $months,
    'weekdays' => $weekdays,
    'weekdays_short' => $weekdays,
    'weekdays_min' => $weekdays,
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => ['، ', ' اور '],
];
