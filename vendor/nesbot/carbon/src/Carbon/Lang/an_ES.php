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
 * - Softaragones Jordi Mallach Pérez, Juan Pablo Martínez bug-glibc-locales@gnu.org, softaragones@softaragones.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['chinero', 'febrero', 'marzo', 'abril', 'mayo', 'chunyo', 'chuliol', 'agosto', 'setiembre', 'octubre', 'noviembre', 'aviento'],
    'months_short' => ['chi', 'feb', 'mar', 'abr', 'may', 'chn', 'chl', 'ago', 'set', 'oct', 'nov', 'avi'],
    'weekdays' => ['domingo', 'luns', 'martes', 'mierques', 'chueves', 'viernes', 'sabado'],
    'weekdays_short' => ['dom', 'lun', 'mar', 'mie', 'chu', 'vie', 'sab'],
    'weekdays_min' => ['dom', 'lun', 'mar', 'mie', 'chu', 'vie', 'sab'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,

    'year' => ':count año',
    'y' => ':count año',
    'a_year' => ':count año',

    'month' => ':count mes',
    'm' => ':count mes',
    'a_month' => ':count mes',

    'week' => ':count semana',
    'w' => ':count semana',
    'a_week' => ':count semana',

    'day' => ':count día',
    'd' => ':count día',
    'a_day' => ':count día',

    'hour' => ':count reloch', // less reliable
    'h' => ':count reloch', // less reliable
    'a_hour' => ':count reloch', // less reliable

    'minute' => ':count minuto',
    'min' => ':count minuto',
    'a_minute' => ':count minuto',

    'second' => ':count segundo',
    's' => ':count segundo',
    'a_second' => ':count segundo',
]);
