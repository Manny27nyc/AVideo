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
 * - Maithili Computing Research Center, Pune, India    rajeshkajha@yahoo.com,akhilesh.k@samusng.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['बैसाख', 'जेठ', 'अषाढ़', 'सावोन', 'भादो', 'आसिन', 'कातिक', 'अगहन', 'पूस', 'माघ', 'फागुन', 'चैति'],
    'months_short' => ['बैसाख', 'जेठ', 'अषाढ़', 'सावोन', 'भादो', 'आसिन', 'कातिक', 'अगहन', 'पूस', 'माघ', 'फागुन', 'चैति'],
    'weekdays' => ['रविदिन', 'सोमदिन', 'मंगलदिन', 'बुधदिन', 'बृहस्पतीदिन', 'शुक्रदिन', 'शनीदिन'],
    'weekdays_short' => ['रवि', 'सोम', 'मंगल', 'बुध', 'बृहस्पती', 'शुक्र', 'शनी'],
    'weekdays_min' => ['रवि', 'सोम', 'मंगल', 'बुध', 'बृहस्पती', 'शुक्र', 'शनी'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['पूर्वाह्न', 'अपराह्न'],

    'year' => ':count ऋतु', // less reliable
    'y' => ':count ऋतु', // less reliable
    'a_year' => ':count ऋतु', // less reliable

    'month' => ':count महिना',
    'm' => ':count महिना',
    'a_month' => ':count महिना',

    'week' => ':count श्रेणी:क्यालेन्डर', // less reliable
    'w' => ':count श्रेणी:क्यालेन्डर', // less reliable
    'a_week' => ':count श्रेणी:क्यालेन्डर', // less reliable

    'day' => ':count दिन',
    'd' => ':count दिन',
    'a_day' => ':count दिन',

    'hour' => ':count घण्टा',
    'h' => ':count घण्टा',
    'a_hour' => ':count घण्टा',

    'minute' => ':count समय', // less reliable
    'min' => ':count समय', // less reliable
    'a_minute' => ':count समय', // less reliable
]);
