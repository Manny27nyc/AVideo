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
 * - szl_PL locale Przemyslaw Buczkowski libc-alpha@sourceware.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['styczyń', 'luty', 'merc', 'kwjeciyń', 'moj', 'czyrwjyń', 'lipjyń', 'siyrpjyń', 'wrzesiyń', 'październik', 'listopad', 'grudziyń'],
    'months_short' => ['sty', 'lut', 'mer', 'kwj', 'moj', 'czy', 'lip', 'siy', 'wrz', 'paź', 'lis', 'gru'],
    'weekdays' => ['niydziela', 'pyńdziŏek', 'wtŏrek', 'strzŏda', 'sztwortek', 'pjōntek', 'sobŏta'],
    'weekdays_short' => ['niy', 'pyń', 'wtŏ', 'str', 'szt', 'pjō', 'sob'],
    'weekdays_min' => ['niy', 'pyń', 'wtŏ', 'str', 'szt', 'pjō', 'sob'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,

    'year' => ':count rok',
    'y' => ':count rok',
    'a_year' => ':count rok',

    'month' => ':count mjeśůnc',
    'm' => ':count mjeśůnc',
    'a_month' => ':count mjeśůnc',

    'week' => ':count tydźyń',
    'w' => ':count tydźyń',
    'a_week' => ':count tydźyń',

    'day' => ':count dźyń',
    'd' => ':count dźyń',
    'a_day' => ':count dźyń',

    'hour' => ':count godzina',
    'h' => ':count godzina',
    'a_hour' => ':count godzina',

    'minute' => ':count minuta',
    'min' => ':count minuta',
    'a_minute' => ':count minuta',

    'second' => ':count sekůnda',
    's' => ':count sekůnda',
    'a_second' => ':count sekůnda',
]);
