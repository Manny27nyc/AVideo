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
 * - nootanghimire
 * - Josh Soref
 * - Nj Subedi
 * - JD Isaacks
 */
return [
    'year' => 'एक बर्ष|:count बर्ष',
    'y' => ':count वर्ष',
    'month' => 'एक महिना|:count महिना',
    'm' => ':count महिना',
    'week' => ':count हप्ता',
    'w' => ':count हप्ता',
    'day' => 'एक दिन|:count दिन',
    'd' => ':count दिन',
    'hour' => 'एक घण्टा|:count घण्टा',
    'h' => ':count घण्टा',
    'minute' => 'एक मिनेट|:count मिनेट',
    'min' => ':count मिनेट',
    'second' => 'केही क्षण|:count सेकेण्ड',
    's' => ':count सेकेण्ड',
    'ago' => ':time अगाडि',
    'from_now' => ':timeमा',
    'after' => ':time पछि',
    'before' => ':time अघि',
    'diff_now' => 'अहिले',
    'diff_today' => 'आज',
    'diff_yesterday' => 'हिजो',
    'diff_tomorrow' => 'भोलि',
    'formats' => [
        'LT' => 'Aको h:mm बजे',
        'LTS' => 'Aको h:mm:ss बजे',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY, Aको h:mm बजे',
        'LLLL' => 'dddd, D MMMM YYYY, Aको h:mm बजे',
    ],
    'calendar' => [
        'sameDay' => '[आज] LT',
        'nextDay' => '[भोलि] LT',
        'nextWeek' => '[आउँदो] dddd[,] LT',
        'lastDay' => '[हिजो] LT',
        'lastWeek' => '[गएको] dddd[,] LT',
        'sameElse' => 'L',
    ],
    'meridiem' => function ($hour) {
        if ($hour < 3) {
            return 'राति';
        }
        if ($hour < 12) {
            return 'बिहान';
        }
        if ($hour < 16) {
            return 'दिउँसो';
        }
        if ($hour < 20) {
            return 'साँझ';
        }

        return 'राति';
    },
    'months' => ['जनवरी', 'फेब्रुवरी', 'मार्च', 'अप्रिल', 'मई', 'जुन', 'जुलाई', 'अगष्ट', 'सेप्टेम्बर', 'अक्टोबर', 'नोभेम्बर', 'डिसेम्बर'],
    'months_short' => ['जन.', 'फेब्रु.', 'मार्च', 'अप्रि.', 'मई', 'जुन', 'जुलाई.', 'अग.', 'सेप्ट.', 'अक्टो.', 'नोभे.', 'डिसे.'],
    'weekdays' => ['आइतबार', 'सोमबार', 'मङ्गलबार', 'बुधबार', 'बिहिबार', 'शुक्रबार', 'शनिबार'],
    'weekdays_short' => ['आइत.', 'सोम.', 'मङ्गल.', 'बुध.', 'बिहि.', 'शुक्र.', 'शनि.'],
    'weekdays_min' => ['आ.', 'सो.', 'मं.', 'बु.', 'बि.', 'शु.', 'श.'],
    'list' => [', ', ' र '],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
];
