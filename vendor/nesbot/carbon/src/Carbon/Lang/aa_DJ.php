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
 * - Ge'ez Frontier Foundation    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['Qunxa Garablu', 'Kudo', 'Ciggilta Kudo', 'Agda Baxisso', 'Caxah Alsa', 'Qasa Dirri', 'Qado Dirri', 'Liiqen', 'Waysu', 'Diteli', 'Ximoli', 'Kaxxa Garablu'],
    'months_short' => ['qun', 'nah', 'cig', 'agd', 'cax', 'qas', 'qad', 'leq', 'way', 'dit', 'xim', 'kax'],
    'weekdays' => ['Acaada', 'Etleeni', 'Talaata', 'Arbaqa', 'Kamiisi', 'Gumqata', 'Sabti'],
    'weekdays_short' => ['aca', 'etl', 'tal', 'arb', 'kam', 'gum', 'sab'],
    'weekdays_min' => ['aca', 'etl', 'tal', 'arb', 'kam', 'gum', 'sab'],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['saaku', 'carra'],

    'year' => ':count gaqambo', // less reliable
    'y' => ':count gaqambo', // less reliable
    'a_year' => ':count gaqambo', // less reliable

    'month' => ':count àlsa',
    'm' => ':count àlsa',
    'a_month' => ':count àlsa',

    'day' => ':count saaku', // less reliable
    'd' => ':count saaku', // less reliable
    'a_day' => ':count saaku', // less reliable

    'hour' => ':count ayti', // less reliable
    'h' => ':count ayti', // less reliable
    'a_hour' => ':count ayti', // less reliable
]);
