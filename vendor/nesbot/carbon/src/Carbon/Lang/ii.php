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

return array_replace_recursive(require __DIR__.'/en.php', [
    'meridiem' => ['ꎸꄑ', 'ꁯꋒ'],
    'weekdays' => ['ꑭꆏꑍ', 'ꆏꊂꋍ', 'ꆏꊂꑍ', 'ꆏꊂꌕ', 'ꆏꊂꇖ', 'ꆏꊂꉬ', 'ꆏꊂꃘ'],
    'weekdays_short' => ['ꑭꆏ', 'ꆏꋍ', 'ꆏꑍ', 'ꆏꌕ', 'ꆏꇖ', 'ꆏꉬ', 'ꆏꃘ'],
    'weekdays_min' => ['ꑭꆏ', 'ꆏꋍ', 'ꆏꑍ', 'ꆏꌕ', 'ꆏꇖ', 'ꆏꉬ', 'ꆏꃘ'],
    'months' => null,
    'months_short' => ['ꋍꆪ', 'ꑍꆪ', 'ꌕꆪ', 'ꇖꆪ', 'ꉬꆪ', 'ꃘꆪ', 'ꏃꆪ', 'ꉆꆪ', 'ꈬꆪ', 'ꊰꆪ', 'ꊰꊪꆪ', 'ꊰꑋꆪ'],
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'L' => 'YYYY-MM-dd',
        'LL' => 'YYYY MMM D',
        'LLL' => 'YYYY MMMM D h:mm a',
        'LLLL' => 'YYYY MMMM D, dddd h:mm a',
    ],

    'year' => ':count ꒉ', // less reliable
    'y' => ':count ꒉ', // less reliable
    'a_year' => ':count ꒉ', // less reliable

    'month' => ':count ꆪ',
    'm' => ':count ꆪ',
    'a_month' => ':count ꆪ',

    'week' => ':count ꏃ', // less reliable
    'w' => ':count ꏃ', // less reliable
    'a_week' => ':count ꏃ', // less reliable

    'day' => ':count ꏜ', // less reliable
    'd' => ':count ꏜ', // less reliable
    'a_day' => ':count ꏜ', // less reliable

    'hour' => ':count ꄮꈉ',
    'h' => ':count ꄮꈉ',
    'a_hour' => ':count ꄮꈉ',

    'minute' => ':count ꀄꊭ', // less reliable
    'min' => ':count ꀄꊭ', // less reliable
    'a_minute' => ':count ꀄꊭ', // less reliable

    'second' => ':count ꇅ', // less reliable
    's' => ':count ꇅ', // less reliable
    'a_second' => ':count ꇅ', // less reliable
]);
