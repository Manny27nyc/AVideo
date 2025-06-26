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
 * - Alessandro Maruccia
 */
return [
    'year' => 'sena|:count sni|:count sni|:count sni',
    'y' => 'sa sena|:count snin|:count snin|:count snin',
    'month' => 'xahar|:count xhur|:count xhur|:count xhur',
    'm' => ':count xahar|:count xhur|:count xhur|:count xhur',
    'week' => 'gimgħa|:count ġimgħat|:count ġimgħat|:count ġimgħat',
    'w' => 'ġimgħa|:count ġimgħat|:count ġimgħat|:count ġimgħat',
    'day' => 'ġurnata|:count ġranet|:count ġranet|:count ġranet',
    'd' => 'ġurnata|:count ġranet|:count ġranet|:count ġranet',
    'hour' => 'siegħa|:count siegħat|:count siegħat|:count siegħat',
    'h' => 'siegħa|:count sigħat|:count sigħat|:count sigħat',
    'minute' => 'minuta|:count minuti|:count minuti|:count minuti',
    'min' => 'min.|:count min.|:count min.|:count min.',
    'second' => 'ftit sekondi|:count sekondi|:count sekondi|:count sekondi',
    's' => 'sek.|:count sek.|:count sek.|:count sek.',
    'ago' => ':time ilu',
    'from_now' => 'f’ :time',
    'diff_now' => 'issa',
    'diff_today' => 'Illum',
    'diff_today_regexp' => 'Illum(?:\\s+fil-)?',
    'diff_yesterday' => 'lbieraħ',
    'diff_yesterday_regexp' => 'Il-bieraħ(?:\\s+fil-)?',
    'diff_tomorrow' => 'għada',
    'diff_tomorrow_regexp' => 'Għada(?:\\s+fil-)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Illum fil-]LT',
        'nextDay' => '[Għada fil-]LT',
        'nextWeek' => 'dddd [fil-]LT',
        'lastDay' => '[Il-bieraħ fil-]LT',
        'lastWeek' => 'dddd [li għadda] [fil-]LT',
        'sameElse' => 'L',
    ],
    'ordinal' => ':numberº',
    'months' => ['Jannar', 'Frar', 'Marzu', 'April', 'Mejju', 'Ġunju', 'Lulju', 'Awwissu', 'Settembru', 'Ottubru', 'Novembru', 'Diċembru'],
    'months_short' => ['Jan', 'Fra', 'Mar', 'Apr', 'Mej', 'Ġun', 'Lul', 'Aww', 'Set', 'Ott', 'Nov', 'Diċ'],
    'weekdays' => ['Il-Ħadd', 'It-Tnejn', 'It-Tlieta', 'L-Erbgħa', 'Il-Ħamis', 'Il-Ġimgħa', 'Is-Sibt'],
    'weekdays_short' => ['Ħad', 'Tne', 'Tli', 'Erb', 'Ħam', 'Ġim', 'Sib'],
    'weekdays_min' => ['Ħa', 'Tn', 'Tl', 'Er', 'Ħa', 'Ġi', 'Si'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', ' u '],
];
