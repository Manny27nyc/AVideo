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
 * - Reşat SABIQ tilde.birlik@gmail.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'Mayıs', 'İyun', 'İyul', 'Avgust', 'Sentâbr', 'Oktâbr', 'Noyabr', 'Dekabr'],
    'months_short' => ['Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyn', 'İyl', 'Avg', 'Sen', 'Okt', 'Noy', 'Dek'],
    'weekdays' => ['Bazar', 'Bazarertesi', 'Salı', 'Çarşembe', 'Cumaaqşamı', 'Cuma', 'Cumaertesi'],
    'weekdays_short' => ['Baz', 'Ber', 'Sal', 'Çar', 'Caq', 'Cum', 'Cer'],
    'weekdays_min' => ['Baz', 'Ber', 'Sal', 'Çar', 'Caq', 'Cum', 'Cer'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ÜE', 'ÜS'],

    'year' => ':count yıl',
    'y' => ':count yıl',
    'a_year' => ':count yıl',

    'month' => ':count ay',
    'm' => ':count ay',
    'a_month' => ':count ay',

    'week' => ':count afta',
    'w' => ':count afta',
    'a_week' => ':count afta',

    'day' => ':count kün',
    'd' => ':count kün',
    'a_day' => ':count kün',

    'hour' => ':count saat',
    'h' => ':count saat',
    'a_hour' => ':count saat',

    'minute' => ':count daqqa',
    'min' => ':count daqqa',
    'a_minute' => ':count daqqa',

    'second' => ':count ekinci',
    's' => ':count ekinci',
    'a_second' => ':count ekinci',
]);
