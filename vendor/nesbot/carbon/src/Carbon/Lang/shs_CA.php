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
 * - Neskie Manuel    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
    'months' => ['Pellkwet̓min', 'Pelctsipwen̓ten', 'Pellsqépts', 'Peslléwten', 'Pell7ell7é7llqten', 'Pelltspéntsk', 'Pelltqwelq̓wél̓t', 'Pellct̓éxel̓cten', 'Pesqelqlélten', 'Pesllwélsten', 'Pellc7ell7é7llcwten̓', 'Pelltetétq̓em'],
    'months_short' => ['Kwe', 'Tsi', 'Sqe', 'Éwt', 'Ell', 'Tsp', 'Tqw', 'Ct̓é', 'Qel', 'Wél', 'U7l', 'Tet'],
    'weekdays' => ['Sxetspesq̓t', 'Spetkesq̓t', 'Selesq̓t', 'Skellesq̓t', 'Smesesq̓t', 'Stselkstesq̓t', 'Stqmekstesq̓t'],
    'weekdays_short' => ['Sxe', 'Spe', 'Sel', 'Ske', 'Sme', 'Sts', 'Stq'],
    'weekdays_min' => ['Sxe', 'Spe', 'Sel', 'Ske', 'Sme', 'Sts', 'Stq'],
    'day_of_first_week_of_year' => 1,

    'year' => ':count sqlélten', // less reliable
    'y' => ':count sqlélten', // less reliable
    'a_year' => ':count sqlélten', // less reliable

    'month' => ':count swewll', // less reliable
    'm' => ':count swewll', // less reliable
    'a_month' => ':count swewll', // less reliable

    'hour' => ':count seqwlút', // less reliable
    'h' => ':count seqwlút', // less reliable
    'a_hour' => ':count seqwlút', // less reliable
]);
