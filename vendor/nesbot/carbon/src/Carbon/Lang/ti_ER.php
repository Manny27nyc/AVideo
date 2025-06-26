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
 * - Ge'ez Frontier Foundation    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['ጥሪ', 'ለካቲት', 'መጋቢት', 'ሚያዝያ', 'ግንቦት', 'ሰነ', 'ሓምለ', 'ነሓሰ', 'መስከረም', 'ጥቅምቲ', 'ሕዳር', 'ታሕሳስ'],
    'months_short' => ['ጥሪ ', 'ለካቲ', 'መጋቢ', 'ሚያዝ', 'ግንቦ', 'ሰነ ', 'ሓምለ', 'ነሓሰ', 'መስከ', 'ጥቅም', 'ሕዳር', 'ታሕሳ'],
    'weekdays' => ['ሰንበት', 'ሰኑይ', 'ሰሉስ', 'ረቡዕ', 'ሓሙስ', 'ዓርቢ', 'ቀዳም'],
    'weekdays_short' => ['ሰንበ', 'ሰኑይ', 'ሰሉስ', 'ረቡዕ', 'ሓሙስ', 'ዓርቢ', 'ቀዳም'],
    'weekdays_min' => ['ሰንበ', 'ሰኑይ', 'ሰሉስ', 'ረቡዕ', 'ሓሙስ', 'ዓርቢ', 'ቀዳም'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ንጉሆ ሰዓተ', 'ድሕር ሰዓት'],

    'year' => ':count ዓመት',
    'y' => ':count ዓመት',
    'a_year' => ':count ዓመት',

    'month' => 'ወርሒ :count',
    'm' => 'ወርሒ :count',
    'a_month' => 'ወርሒ :count',

    'week' => ':count ሰሙን',
    'w' => ':count ሰሙን',
    'a_week' => ':count ሰሙን',

    'day' => ':count መዓልቲ',
    'd' => ':count መዓልቲ',
    'a_day' => ':count መዓልቲ',

    'hour' => ':count ሰዓት',
    'h' => ':count ሰዓት',
    'a_hour' => ':count ሰዓት',

    'minute' => ':count ደቒቕ',
    'min' => ':count ደቒቕ',
    'a_minute' => ':count ደቒቕ',

    'second' => ':count ሰከንድ',
    's' => ':count ሰከንድ',
    'a_second' => ':count ሰከንድ',
]);
