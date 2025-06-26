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
 * - belkacem77@gmail.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['Yennayer', 'Fuṛar', 'Meɣres', 'Yebrir', 'Mayyu', 'Yunyu', 'Yulyu', 'ɣuct', 'Ctembeṛ', 'Tubeṛ', 'Wambeṛ', 'Dujembeṛ'],
    'months_short' => ['Yen', 'Fur', 'Meɣ', 'Yeb', 'May', 'Yun', 'Yul', 'ɣuc', 'Cte', 'Tub', 'Wam', 'Duj'],
    'weekdays' => ['Acer', 'Arim', 'Aram', 'Ahad', 'Amhad', 'Sem', 'Sed'],
    'weekdays_short' => ['Ace', 'Ari', 'Ara', 'Aha', 'Amh', 'Sem', 'Sed'],
    'weekdays_min' => ['Ace', 'Ari', 'Ara', 'Aha', 'Amh', 'Sem', 'Sed'],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['FT', 'MD'],

    'year' => ':count n yiseggasen',
    'y' => ':count n yiseggasen',
    'a_year' => ':count n yiseggasen',

    'month' => ':count n wayyuren',
    'm' => ':count n wayyuren',
    'a_month' => ':count n wayyuren',

    'week' => ':count n ledwaṛ', // less reliable
    'w' => ':count n ledwaṛ', // less reliable
    'a_week' => ':count n ledwaṛ', // less reliable

    'day' => ':count n wussan',
    'd' => ':count n wussan',
    'a_day' => ':count n wussan',

    'hour' => ':count n tsaɛtin',
    'h' => ':count n tsaɛtin',
    'a_hour' => ':count n tsaɛtin',

    'minute' => ':count n tedqiqin',
    'min' => ':count n tedqiqin',
    'a_minute' => ':count n tedqiqin',

    'second' => ':count tasdidt', // less reliable
    's' => ':count tasdidt', // less reliable
    'a_second' => ':count tasdidt', // less reliable
]);
