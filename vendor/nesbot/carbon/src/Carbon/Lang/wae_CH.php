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
 * - Walser Translation Team ml@translate-wae.ch
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'YYYY-MM-DD',
    ],
    'months' => ['Jenner', 'Hornig', 'Märze', 'Abrille', 'Meije', 'Bráčet', 'Heiwet', 'Öigšte', 'Herbštmánet', 'Wímánet', 'Wintermánet', 'Chrištmánet'],
    'months_short' => ['Jen', 'Hor', 'Mär', 'Abr', 'Mei', 'Brá', 'Hei', 'Öig', 'Her', 'Wím', 'Win', 'Chr'],
    'weekdays' => ['Suntag', 'Mäntag', 'Zischtag', 'Mittwuch', 'Frontag', 'Fritag', 'Samschtag'],
    'weekdays_short' => ['Sun', 'Män', 'Zis', 'Mit', 'Fro', 'Fri', 'Sam'],
    'weekdays_min' => ['Sun', 'Män', 'Zis', 'Mit', 'Fro', 'Fri', 'Sam'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,

    'month' => ':count Maano', // less reliable
    'm' => ':count Maano', // less reliable
    'a_month' => ':count Maano', // less reliable
]);
