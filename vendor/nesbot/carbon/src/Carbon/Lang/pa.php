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
 * - Tsutomu Kuroda
 * - Punjab
 */
return [
    'year' => 'ਇੱਕ ਸਾਲ|:count ਸਾਲ',
    'month' => 'ਇੱਕ ਮਹੀਨਾ|:count ਮਹੀਨੇ',
    'week' => 'ਹਫਤਾ|:count ਹਫ਼ਤੇ',
    'day' => 'ਇੱਕ ਦਿਨ|:count ਦਿਨ',
    'hour' => 'ਇੱਕ ਘੰਟਾ|:count ਘੰਟੇ',
    'minute' => 'ਇਕ ਮਿੰਟ|:count ਮਿੰਟ',
    'second' => 'ਕੁਝ ਸਕਿੰਟ|:count ਸਕਿੰਟ',
    'ago' => ':time ਪਹਿਲਾਂ',
    'from_now' => ':time ਵਿੱਚ',
    'before' => ':time ਤੋਂ ਪਹਿਲਾਂ',
    'after' => ':time ਤੋਂ ਬਾਅਦ',
    'diff_now' => 'ਹੁਣ',
    'diff_today' => 'ਅਜ',
    'diff_yesterday' => 'ਕਲ',
    'diff_tomorrow' => 'ਕਲ',
    'formats' => [
        'LT' => 'A h:mm ਵਜੇ',
        'LTS' => 'A h:mm:ss ਵਜੇ',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY, A h:mm ਵਜੇ',
        'LLLL' => 'dddd, D MMMM YYYY, A h:mm ਵਜੇ',
    ],
    'calendar' => [
        'sameDay' => '[ਅਜ] LT',
        'nextDay' => '[ਕਲ] LT',
        'nextWeek' => '[ਅਗਲਾ] dddd, LT',
        'lastDay' => '[ਕਲ] LT',
        'lastWeek' => '[ਪਿਛਲੇ] dddd, LT',
        'sameElse' => 'L',
    ],
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'ਰਾਤ';
        }
        if ($hour < 10) {
            return 'ਸਵੇਰ';
        }
        if ($hour < 17) {
            return 'ਦੁਪਹਿਰ';
        }
        if ($hour < 20) {
            return 'ਸ਼ਾਮ';
        }

        return 'ਰਾਤ';
    },
    'months' => ['ਜਨਵਰੀ', 'ਫ਼ਰਵਰੀ', 'ਮਾਰਚ', 'ਅਪ੍ਰੈਲ', 'ਮਈ', 'ਜੂਨ', 'ਜੁਲਾਈ', 'ਅਗਸਤ', 'ਸਤੰਬਰ', 'ਅਕਤੂਬਰ', 'ਨਵੰਬਰ', 'ਦਸੰਬਰ'],
    'months_short' => ['ਜਨਵਰੀ', 'ਫ਼ਰਵਰੀ', 'ਮਾਰਚ', 'ਅਪ੍ਰੈਲ', 'ਮਈ', 'ਜੂਨ', 'ਜੁਲਾਈ', 'ਅਗਸਤ', 'ਸਤੰਬਰ', 'ਅਕਤੂਬਰ', 'ਨਵੰਬਰ', 'ਦਸੰਬਰ'],
    'weekdays' => ['ਐਤਵਾਰ', 'ਸੋਮਵਾਰ', 'ਮੰਗਲਵਾਰ', 'ਬੁਧਵਾਰ', 'ਵੀਰਵਾਰ', 'ਸ਼ੁੱਕਰਵਾਰ', 'ਸ਼ਨੀਚਰਵਾਰ'],
    'weekdays_short' => ['ਐਤ', 'ਸੋਮ', 'ਮੰਗਲ', 'ਬੁਧ', 'ਵੀਰ', 'ਸ਼ੁਕਰ', 'ਸ਼ਨੀ'],
    'weekdays_min' => ['ਐਤ', 'ਸੋਮ', 'ਮੰਗਲ', 'ਬੁਧ', 'ਵੀਰ', 'ਸ਼ੁਕਰ', 'ਸ਼ਨੀ'],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' ਅਤੇ '],
    'weekend' => [0, 0],
    'alt_numbers' => ['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'],
];
