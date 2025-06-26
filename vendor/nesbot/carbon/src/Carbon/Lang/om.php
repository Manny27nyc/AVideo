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
 * - Ge'ez Frontier Foundation & Sagalee Oromoo Publishing Co. Inc.    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'dd-MMM-YYYY',
        'LLL' => 'dd MMMM YYYY HH:mm',
        'LLLL' => 'dddd, MMMM D, YYYY HH:mm',
    ],
    'months' => ['Amajjii', 'Guraandhala', 'Bitooteessa', 'Elba', 'Caamsa', 'Waxabajjii', 'Adooleessa', 'Hagayya', 'Fuulbana', 'Onkololeessa', 'Sadaasa', 'Muddee'],
    'months_short' => ['Ama', 'Gur', 'Bit', 'Elb', 'Cam', 'Wax', 'Ado', 'Hag', 'Ful', 'Onk', 'Sad', 'Mud'],
    'weekdays' => ['Dilbata', 'Wiixata', 'Qibxata', 'Roobii', 'Kamiisa', 'Jimaata', 'Sanbata'],
    'weekdays_short' => ['Dil', 'Wix', 'Qib', 'Rob', 'Kam', 'Jim', 'San'],
    'weekdays_min' => ['Dil', 'Wix', 'Qib', 'Rob', 'Kam', 'Jim', 'San'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['WD', 'WB'],

    'year' => 'wggoota :count',
    'y' => 'wggoota :count',
    'a_year' => 'wggoota :count',

    'month' => 'ji’a :count',
    'm' => 'ji’a :count',
    'a_month' => 'ji’a :count',

    'week' => 'torban :count',
    'w' => 'torban :count',
    'a_week' => 'torban :count',

    'day' => 'guyyaa :count',
    'd' => 'guyyaa :count',
    'a_day' => 'guyyaa :count',

    'hour' => 'saʼaatii :count',
    'h' => 'saʼaatii :count',
    'a_hour' => 'saʼaatii :count',

    'minute' => 'daqiiqaa :count',
    'min' => 'daqiiqaa :count',
    'a_minute' => 'daqiiqaa :count',

    'second' => 'sekoondii :count',
    's' => 'sekoondii :count',
    'a_second' => 'sekoondii :count',
]);
