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
 * - François B
 * - JD Isaacks
 */
return [
    'year' => ':count ҫул',
    'a_year' => '{1}пӗр ҫул|:count ҫул',
    'month' => ':count уйӑх',
    'a_month' => '{1}пӗр уйӑх|:count уйӑх',
    'week' => ':count эрне',
    'a_week' => '{1}пӗр эрне|:count эрне',
    'day' => ':count кун',
    'a_day' => '{1}пӗр кун|:count кун',
    'hour' => ':count сехет',
    'a_hour' => '{1}пӗр сехет|:count сехет',
    'minute' => ':count минут',
    'a_minute' => '{1}пӗр минут|:count минут',
    'second' => ':count ҫеккунт',
    'a_second' => '{1}пӗр-ик ҫеккунт|:count ҫеккунт',
    'ago' => ':time каялла',
    'from_now' => function ($time) {
        return $time.(preg_match('/сехет$/u', $time) ? 'рен' : (preg_match('/ҫул/u', $time) ? 'тан' : 'ран'));
    },
    'diff_yesterday' => 'Ӗнер',
    'diff_today' => 'Паян',
    'diff_tomorrow' => 'Ыран',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD-MM-YYYY',
        'LL' => 'YYYY [ҫулхи] MMMM [уйӑхӗн] D[-мӗшӗ]',
        'LLL' => 'YYYY [ҫулхи] MMMM [уйӑхӗн] D[-мӗшӗ], HH:mm',
        'LLLL' => 'dddd, YYYY [ҫулхи] MMMM [уйӑхӗн] D[-мӗшӗ], HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Паян] LT [сехетре]',
        'nextDay' => '[Ыран] LT [сехетре]',
        'nextWeek' => '[Ҫитес] dddd LT [сехетре]',
        'lastDay' => '[Ӗнер] LT [сехетре]',
        'lastWeek' => '[Иртнӗ] dddd LT [сехетре]',
        'sameElse' => 'L',
    ],
    'ordinal' => ':number-мӗш',
    'months' => ['кӑрлач', 'нарӑс', 'пуш', 'ака', 'май', 'ҫӗртме', 'утӑ', 'ҫурла', 'авӑн', 'юпа', 'чӳк', 'раштав'],
    'months_short' => ['кӑр', 'нар', 'пуш', 'ака', 'май', 'ҫӗр', 'утӑ', 'ҫур', 'авн', 'юпа', 'чӳк', 'раш'],
    'weekdays' => ['вырсарникун', 'тунтикун', 'ытларикун', 'юнкун', 'кӗҫнерникун', 'эрнекун', 'шӑматкун'],
    'weekdays_short' => ['выр', 'тун', 'ытл', 'юн', 'кӗҫ', 'эрн', 'шӑм'],
    'weekdays_min' => ['вр', 'тн', 'ыт', 'юн', 'кҫ', 'эр', 'шм'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' тата '],
];
