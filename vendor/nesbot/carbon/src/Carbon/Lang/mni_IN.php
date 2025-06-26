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
    'months' => ['জানুৱারি', 'ফেব্রুৱারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগষ্ট', 'সেপ্তেম্বর', 'ওক্তোবর', 'নবেম্বর', 'ডিসেম্বর'],
    'months_short' => ['জান', 'ফেব', 'মার', 'এপ্রি', 'মে', 'জুন', 'জুল', 'আগ', 'সেপ', 'ওক্ত', 'নবে', 'ডিস'],
    'weekdays' => ['নোংমাইজিং', 'নিংথৌকাবা', 'লৈবাকপোকপা', 'য়ুমশকৈশা', 'শগোলশেন', 'ইরাই', 'থাংজ'],
    'weekdays_short' => ['নোং', 'নিং', 'লৈবাক', 'য়ুম', 'শগোল', 'ইরা', 'থাং'],
    'weekdays_min' => ['নোং', 'নিং', 'লৈবাক', 'য়ুম', 'শগোল', 'ইরা', 'থাং'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['এ.ম.', 'প.ম.'],

    'year' => ':count ইসিং', // less reliable
    'y' => ':count ইসিং', // less reliable
    'a_year' => ':count ইসিং', // less reliable

    'second' => ':count ꯅꯤꯡꯊꯧꯀꯥꯕ', // less reliable
    's' => ':count ꯅꯤꯡꯊꯧꯀꯥꯕ', // less reliable
    'a_second' => ':count ꯅꯤꯡꯊꯧꯀꯥꯕ', // less reliable
]);
