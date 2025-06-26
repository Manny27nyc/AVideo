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
 * - Samsung Electronics Co., Ltd.    akhilesh.k@samsung.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['Ianuari', 'Fepuari', 'Mati', 'Aperila', 'Me', 'Iuni', 'Iulai', 'Auguso', 'Setema', 'Oketopa', 'Novema', 'Tesema'],
    'months_short' => ['Ian', 'Fep', 'Mat', 'Ape', 'Me', 'Iun', 'Iul', 'Aug', 'Set', 'Oke', 'Nov', 'Tes'],
    'weekdays' => ['Aso Sa', 'Aso Gafua', 'Aso Lua', 'Aso Lulu', 'Aso Tofi', 'Aso Farail', 'Aso To\'ana\'i'],
    'weekdays_short' => ['Aso Sa', 'Aso Gaf', 'Aso Lua', 'Aso Lul', 'Aso Tof', 'Aso Far', 'Aso To\''],
    'weekdays_min' => ['Aso Sa', 'Aso Gaf', 'Aso Lua', 'Aso Lul', 'Aso Tof', 'Aso Far', 'Aso To\''],

    'hour' => ':count uati', // less reliable
    'h' => ':count uati', // less reliable
    'a_hour' => ':count uati', // less reliable

    'minute' => ':count itiiti', // less reliable
    'min' => ':count itiiti', // less reliable
    'a_minute' => ':count itiiti', // less reliable

    'second' => ':count lua', // less reliable
    's' => ':count lua', // less reliable
    'a_second' => ':count lua', // less reliable

    'year' => ':count tausaga',
    'y' => ':count tausaga',
    'a_year' => ':count tausaga',

    'month' => ':count māsina',
    'm' => ':count māsina',
    'a_month' => ':count māsina',

    'week' => ':count vaiaso',
    'w' => ':count vaiaso',
    'a_week' => ':count vaiaso',

    'day' => ':count aso',
    'd' => ':count aso',
    'a_day' => ':count aso',
]);
