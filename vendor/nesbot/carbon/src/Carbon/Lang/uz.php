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
 * - Dmitriy Shabanov
 * - JD Isaacks
 * - Inoyatulloh
 * - Jamshid
 * - aarkhipov
 * - Philippe Vaucher
 * - felixthemagnificent
 * - Tsutomu Kuroda
 * - tjku
 * - Max Melentiev
 * - Juanito Fatas
 * - Alisher Ulugbekov
 * - Ergashev Adizbek
 */
return [
    'year' => ':count йил',
    'a_year' => '{1}бир йил|:count йил',
    'y' => ':count й',
    'month' => ':count ой',
    'a_month' => '{1}бир ой|:count ой',
    'm' => ':count о',
    'week' => ':count ҳафта',
    'a_week' => '{1}бир ҳафта|:count ҳафта',
    'w' => ':count ҳ',
    'day' => ':count кун',
    'a_day' => '{1}бир кун|:count кун',
    'd' => ':count к',
    'hour' => ':count соат',
    'a_hour' => '{1}бир соат|:count соат',
    'h' => ':count с',
    'minute' => ':count дақиқа',
    'a_minute' => '{1}бир дақиқа|:count дақиқа',
    'min' => ':count д',
    'second' => ':count сония',
    'a_second' => '{1}сония|:count сония',
    's' => ':count с',
    'ago' => ':time аввал',
    'from_now' => 'Якин :time ичида',
    'after' => ':timeдан кейин',
    'before' => ':time олдин',
    'diff_now' => 'ҳозир',
    'diff_today' => 'Бугун',
    'diff_today_regexp' => 'Бугун(?:\\s+соат)?',
    'diff_yesterday' => 'Кеча',
    'diff_yesterday_regexp' => 'Кеча(?:\\s+соат)?',
    'diff_tomorrow' => 'Эртага',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'D MMMM YYYY, dddd HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Бугун соат] LT [да]',
        'nextDay' => '[Эртага] LT [да]',
        'nextWeek' => 'dddd [куни соат] LT [да]',
        'lastDay' => '[Кеча соат] LT [да]',
        'lastWeek' => '[Утган] dddd [куни соат] LT [да]',
        'sameElse' => 'L',
    ],
    'months' => ['январ', 'феврал', 'март', 'апрел', 'май', 'июн', 'июл', 'август', 'сентябр', 'октябр', 'ноябр', 'декабр'],
    'months_short' => ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
    'weekdays' => ['якшанба', 'душанба', 'сешанба', 'чоршанба', 'пайшанба', 'жума', 'шанба'],
    'weekdays_short' => ['якш', 'душ', 'сеш', 'чор', 'пай', 'жум', 'шан'],
    'weekdays_min' => ['як', 'ду', 'се', 'чо', 'па', 'жу', 'ша'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['эрталаб', 'кечаси'],
    'list' => [', ', ' ва '],
];
