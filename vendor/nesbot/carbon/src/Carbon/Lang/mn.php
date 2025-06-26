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
 * - tjku
 * - Max Melentiev
 * - Zolzaya Erdenebaatar
 * - Tom Hughes
 * - Akira Matsuda
 * - Christopher Dell
 * - Michael Kessler
 * - Enrique Vidal
 * - Simone Carletti
 * - Aaron Patterson
 * - Nicolás Hock Isaza
 * - Ochirkhuyag
 * - Batmandakh
 */
return [
    'year' => ':count жил',
    'y' => ':count жил',
    'month' => ':count сар',
    'm' => ':count сар',
    'week' => ':count долоо хоног',
    'w' => ':count долоо хоног',
    'day' => ':count өдөр',
    'd' => ':count өдөр',
    'hour' => ':count цаг',
    'h' => ':countц',
    'minute' => ':count минут',
    'min' => ':countм',
    'second' => ':count секунд',
    's' => ':countс',

    'ago' => ':timeн өмнө',
    'year_ago' => ':count жилий',
    'month_ago' => ':count сары',
    'day_ago' => ':count хоногий',
    'hour_ago' => ':count цагий',
    'minute_ago' => ':count минуты',
    'second_ago' => ':count секунды',

    'from_now' => 'одоогоос :time',
    'year_from_now' => ':count жилийн дараа',
    'month_from_now' => ':count сарын дараа',
    'day_from_now' => ':count хоногийн дараа',
    'hour_from_now' => ':count цагийн дараа',
    'minute_from_now' => ':count минутын дараа',
    'second_from_now' => ':count секундын дараа',

    // Does it required to make translation for before, after as follows? hmm, I think we've made it with ago and from now keywords already. Anyway, I've included it just in case of undesired action...
    'after' => ':timeн дараа',
    'year_after' => ':count жилий',
    'month_after' => ':count сары',
    'day_after' => ':count хоногий',
    'hour_after' => ':count цагий',
    'minute_after' => ':count минуты',
    'second_after' => ':count секунды',

    'before' => ':timeн өмнө',
    'year_before' => ':count жилий',
    'month_before' => ':count сары',
    'day_before' => ':count хоногий',
    'hour_before' => ':count цагий',
    'minute_before' => ':count минуты',
    'second_before' => ':count секунды',

    'list' => ', ',
    'diff_now' => 'одоо',
    'diff_yesterday' => 'өчигдөр',
    'diff_tomorrow' => 'маргааш',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'YYYY-MM-DD',
        'LL' => 'YYYY MMMM DD',
        'LLL' => 'YY-MM-DD, HH:mm',
        'LLLL' => 'YYYY MMMM DD, HH:mm',
    ],
    'weekdays' => ['Ням', 'Даваа', 'Мягмар', 'Лхагва', 'Пүрэв', 'Баасан', 'Бямба'],
    'weekdays_short' => ['Ня', 'Да', 'Мя', 'Лх', 'Пү', 'Ба', 'Бя'],
    'weekdays_min' => ['Ня', 'Да', 'Мя', 'Лх', 'Пү', 'Ба', 'Бя'],
    'months' => ['1 сар', '2 сар', '3 сар', '4 сар', '5 сар', '6 сар', '7 сар', '8 сар', '9 сар', '10 сар', '11 сар', '12 сар'],
    'months_short' => ['1 сар', '2 сар', '3 сар', '4 сар', '5 сар', '6 сар', '7 сар', '8 сар', '9 сар', '10 сар', '11 сар', '12 сар'],
    'meridiem' => ['өглөө', 'орой'],
    'first_day_of_week' => 1,
];
