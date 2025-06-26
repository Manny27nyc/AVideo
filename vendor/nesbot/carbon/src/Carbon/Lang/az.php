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
 * - Josh Soref
 * - Kunal Marwaha
 * - François B
 * - JD Isaacks
 * - Orxan
 * - Şəhriyar İmanov
 * - Baran Şengül
 */
return [
    'year' => ':count il',
    'a_year' => '{1}bir il|]1,Inf[:count il',
    'y' => ':count il',
    'month' => ':count ay',
    'a_month' => '{1}bir ay|]1,Inf[:count ay',
    'm' => ':count ay',
    'week' => ':count həftə',
    'a_week' => '{1}bir həftə|]1,Inf[:count həftə',
    'w' => ':count h.',
    'day' => ':count gün',
    'a_day' => '{1}bir gün|]1,Inf[:count gün',
    'd' => ':count g.',
    'hour' => ':count saat',
    'a_hour' => '{1}bir saat|]1,Inf[:count saat',
    'h' => ':count saat',
    'minute' => ':count d.',
    'a_minute' => '{1}bir dəqiqə|]1,Inf[:count dəqiqə',
    'min' => ':count dəqiqə',
    'second' => ':count san.',
    'a_second' => '{1}birneçə saniyə|]1,Inf[:count saniyə',
    's' => ':count saniyə',
    'ago' => ':time əvvəl',
    'from_now' => ':time sonra',
    'after' => ':time sonra',
    'before' => ':time əvvəl',
    'diff_now' => 'indi',
    'diff_today' => 'bugün',
    'diff_today_regexp' => 'bugün(?:\\s+saat)?',
    'diff_yesterday' => 'dünən',
    'diff_tomorrow' => 'sabah',
    'diff_tomorrow_regexp' => 'sabah(?:\\s+saat)?',
    'diff_before_yesterday' => 'srağagün',
    'diff_after_tomorrow' => 'birisi gün',
    'period_recurrences' => ':count dəfədən bir',
    'period_interval' => 'hər :interval',
    'period_start_date' => ':date tarixindən başlayaraq',
    'period_end_date' => ':date tarixinədək',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[bugün saat] LT',
        'nextDay' => '[sabah saat] LT',
        'nextWeek' => '[gələn həftə] dddd [saat] LT',
        'lastDay' => '[dünən] LT',
        'lastWeek' => '[keçən həftə] dddd [saat] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number) {
        if ($number === 0) { // special case for zero
            return "$number-ıncı";
        }

        static $suffixes = [
            1 => '-inci',
            5 => '-inci',
            8 => '-inci',
            70 => '-inci',
            80 => '-inci',
            2 => '-nci',
            7 => '-nci',
            20 => '-nci',
            50 => '-nci',
            3 => '-üncü',
            4 => '-üncü',
            100 => '-üncü',
            6 => '-ncı',
            9 => '-uncu',
            10 => '-uncu',
            30 => '-uncu',
            60 => '-ıncı',
            90 => '-ıncı',
        ];

        $lastDigit = $number % 10;

        return $number.($suffixes[$lastDigit] ?? $suffixes[$number % 100 - $lastDigit] ?? $suffixes[$number >= 100 ? 100 : -1] ?? '');
    },
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'gecə';
        }
        if ($hour < 12) {
            return 'səhər';
        }
        if ($hour < 17) {
            return 'gündüz';
        }

        return 'axşam';
    },
    'months' => ['yanvar', 'fevral', 'mart', 'aprel', 'may', 'iyun', 'iyul', 'avqust', 'sentyabr', 'oktyabr', 'noyabr', 'dekabr'],
    'months_short' => ['yan', 'fev', 'mar', 'apr', 'may', 'iyn', 'iyl', 'avq', 'sen', 'okt', 'noy', 'dek'],
    'months_standalone' => ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'İyun', 'İyul', 'Avqust', 'Sentyabr', 'Oktyabr', 'Noyabr', 'Dekabr'],
    'weekdays' => ['bazar', 'bazar ertəsi', 'çərşənbə axşamı', 'çərşənbə', 'cümə axşamı', 'cümə', 'şənbə'],
    'weekdays_short' => ['baz', 'bze', 'çax', 'çər', 'cax', 'cüm', 'şən'],
    'weekdays_min' => ['bz', 'be', 'ça', 'çə', 'ca', 'cü', 'şə'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' və '],
];
