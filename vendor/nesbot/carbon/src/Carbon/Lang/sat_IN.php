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
 * - Red Hat Pune    libc-alpha@sourceware.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['जनवरी', 'फरवरी', 'मार्च', 'अप्रेल', 'मई', 'जुन', 'जुलाई', 'अगस्त', 'सितम्बर', 'अखथबर', 'नवम्बर', 'दिसम्बर'],
    'months_short' => ['जनवरी', 'फरवरी', 'मार्च', 'अप्रेल', 'मई', 'जुन', 'जुलाई', 'अगस्त', 'सितम्बर', 'अखथबर', 'नवम्बर', 'दिसम्बर'],
    'weekdays' => ['सिंगेमाँहाँ', 'ओतेमाँहाँ', 'बालेमाँहाँ', 'सागुनमाँहाँ', 'सारदीमाँहाँ', 'जारुममाँहाँ', 'ञुहुममाँहाँ'],
    'weekdays_short' => ['सिंगे', 'ओते', 'बाले', 'सागुन', 'सारदी', 'जारुम', 'ञुहुम'],
    'weekdays_min' => ['सिंगे', 'ओते', 'बाले', 'सागुन', 'सारदी', 'जारुम', 'ञुहुम'],
    'day_of_first_week_of_year' => 1,

    'month' => ':count ńindạ cando', // less reliable
    'm' => ':count ńindạ cando', // less reliable
    'a_month' => ':count ńindạ cando', // less reliable

    'week' => ':count mãhã', // less reliable
    'w' => ':count mãhã', // less reliable
    'a_week' => ':count mãhã', // less reliable

    'hour' => ':count ᱥᱳᱱᱚ', // less reliable
    'h' => ':count ᱥᱳᱱᱚ', // less reliable
    'a_hour' => ':count ᱥᱳᱱᱚ', // less reliable

    'minute' => ':count ᱯᱤᱞᱪᱩ', // less reliable
    'min' => ':count ᱯᱤᱞᱪᱩ', // less reliable
    'a_minute' => ':count ᱯᱤᱞᱪᱩ', // less reliable

    'second' => ':count ar', // less reliable
    's' => ':count ar', // less reliable
    'a_second' => ':count ar', // less reliable

    'year' => ':count ne̲s',
    'y' => ':count ne̲s',
    'a_year' => ':count ne̲s',

    'day' => ':count ᱫᱤᱱ',
    'd' => ':count ᱫᱤᱱ',
    'a_day' => ':count ᱫᱤᱱ',
]);
