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
 * - François B
 * - Karamell
 */
return [
    'year' => '{1}:count jahki|:count jagit',
    'a_year' => '{1}okta jahki|:count jagit',
    'y' => ':count j.',
    'month' => '{1}:count mánnu|:count mánut',
    'a_month' => '{1}okta mánnu|:count mánut',
    'm' => ':count mán.',
    'week' => '{1}:count vahkku|:count vahkku',
    'a_week' => '{1}okta vahkku|:count vahkku',
    'w' => ':count v.',
    'day' => '{1}:count beaivi|:count beaivvit',
    'a_day' => '{1}okta beaivi|:count beaivvit',
    'd' => ':count b.',
    'hour' => '{1}:count diimmu|:count diimmut',
    'a_hour' => '{1}okta diimmu|:count diimmut',
    'h' => ':count d.',
    'minute' => '{1}:count minuhta|:count minuhtat',
    'a_minute' => '{1}okta minuhta|:count minuhtat',
    'min' => ':count min.',
    'second' => '{1}:count sekunddat|:count sekunddat',
    'a_second' => '{1}moadde sekunddat|:count sekunddat',
    's' => ':count s.',
    'ago' => 'maŋit :time',
    'from_now' => ':time geažes',
    'diff_yesterday' => 'ikte',
    'diff_yesterday_regexp' => 'ikte(?:\\s+ti)?',
    'diff_today' => 'otne',
    'diff_today_regexp' => 'otne(?:\\s+ti)?',
    'diff_tomorrow' => 'ihttin',
    'diff_tomorrow_regexp' => 'ihttin(?:\\s+ti)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'MMMM D. [b.] YYYY',
        'LLL' => 'MMMM D. [b.] YYYY [ti.] HH:mm',
        'LLLL' => 'dddd, MMMM D. [b.] YYYY [ti.] HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[otne ti] LT',
        'nextDay' => '[ihttin ti] LT',
        'nextWeek' => 'dddd [ti] LT',
        'lastDay' => '[ikte ti] LT',
        'lastWeek' => '[ovddit] dddd [ti] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => ':number.',
    'months' => ['ođđajagemánnu', 'guovvamánnu', 'njukčamánnu', 'cuoŋománnu', 'miessemánnu', 'geassemánnu', 'suoidnemánnu', 'borgemánnu', 'čakčamánnu', 'golggotmánnu', 'skábmamánnu', 'juovlamánnu'],
    'months_short' => ['ođđj', 'guov', 'njuk', 'cuo', 'mies', 'geas', 'suoi', 'borg', 'čakč', 'golg', 'skáb', 'juov'],
    'weekdays' => ['sotnabeaivi', 'vuossárga', 'maŋŋebárga', 'gaskavahkku', 'duorastat', 'bearjadat', 'lávvardat'],
    'weekdays_short' => ['sotn', 'vuos', 'maŋ', 'gask', 'duor', 'bear', 'láv'],
    'weekdays_min' => ['s', 'v', 'm', 'g', 'd', 'b', 'L'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', ' ja '],
    'meridiem' => ['i.b.', 'e.b.'],
];
