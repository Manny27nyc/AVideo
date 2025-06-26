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
 * - Orif N. Jr
 */
return [
    'year' => '{1}як сол|:count сол',
    'month' => '{1}як моҳ|:count моҳ',
    'week' => '{1}як ҳафта|:count ҳафта',
    'day' => '{1}як рӯз|:count рӯз',
    'hour' => '{1}як соат|:count соат',
    'minute' => '{1}як дақиқа|:count дақиқа',
    'second' => '{1}якчанд сония|:count сония',
    'ago' => ':time пеш',
    'from_now' => 'баъди :time',
    'diff_today' => 'Имрӯз',
    'diff_yesterday' => 'Дирӯз',
    'diff_yesterday_regexp' => 'Дирӯз(?:\\s+соати)?',
    'diff_tomorrow' => 'Пагоҳ',
    'diff_tomorrow_regexp' => 'Пагоҳ(?:\\s+соати)?',
    'diff_today_regexp' => 'Имрӯз(?:\\s+соати)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Имрӯз соати] LT',
        'nextDay' => '[Пагоҳ соати] LT',
        'nextWeek' => 'dddd[и] [ҳафтаи оянда соати] LT',
        'lastDay' => '[Дирӯз соати] LT',
        'lastWeek' => 'dddd[и] [ҳафтаи гузашта соати] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number) {
        if ($number === 0) { // special case for zero
            return "$number-ıncı";
        }

        static $suffixes = [
            0 => '-ум',
            1 => '-ум',
            2 => '-юм',
            3 => '-юм',
            4 => '-ум',
            5 => '-ум',
            6 => '-ум',
            7 => '-ум',
            8 => '-ум',
            9 => '-ум',
            10 => '-ум',
            12 => '-ум',
            13 => '-ум',
            20 => '-ум',
            30 => '-юм',
            40 => '-ум',
            50 => '-ум',
            60 => '-ум',
            70 => '-ум',
            80 => '-ум',
            90 => '-ум',
            100 => '-ум',
        ];

        return $number.($suffixes[$number] ?? $suffixes[$number % 10] ?? $suffixes[$number >= 100 ? 100 : -1] ?? '');
    },
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'шаб';
        }
        if ($hour < 11) {
            return 'субҳ';
        }
        if ($hour < 16) {
            return 'рӯз';
        }
        if ($hour < 19) {
            return 'бегоҳ';
        }

        return 'шаб';
    },
    'months' => ['январ', 'феврал', 'март', 'апрел', 'май', 'июн', 'июл', 'август', 'сентябр', 'октябр', 'ноябр', 'декабр'],
    'months_short' => ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
    'weekdays' => ['якшанбе', 'душанбе', 'сешанбе', 'чоршанбе', 'панҷшанбе', 'ҷумъа', 'шанбе'],
    'weekdays_short' => ['яшб', 'дшб', 'сшб', 'чшб', 'пшб', 'ҷум', 'шнб'],
    'weekdays_min' => ['яш', 'дш', 'сш', 'чш', 'пш', 'ҷм', 'шб'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' ва '],
];
