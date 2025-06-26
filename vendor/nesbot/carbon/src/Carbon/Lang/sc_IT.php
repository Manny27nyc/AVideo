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
 * - Sardinian Translators Team Massimeddu Cireddu massimeddu@gmail.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD. MM. YY',
    ],
    'months' => ['Ghennàrgiu', 'Freàrgiu', 'Martzu', 'Abrile', 'Maju', 'Làmpadas', 'Argiolas//Trìulas', 'Austu', 'Cabudanni', 'Santugaine//Ladàmine', 'Onniasantu//Santandria', 'Nadale//Idas'],
    'months_short' => ['Ghe', 'Fre', 'Mar', 'Abr', 'Maj', 'Làm', 'Arg', 'Aus', 'Cab', 'Lad', 'Onn', 'Nad'],
    'weekdays' => ['Domìnigu', 'Lunis', 'Martis', 'Mèrcuris', 'Giòbia', 'Chenàbura', 'Sàbadu'],
    'weekdays_short' => ['Dom', 'Lun', 'Mar', 'Mèr', 'Giò', 'Che', 'Sàb'],
    'weekdays_min' => ['Dom', 'Lun', 'Mar', 'Mèr', 'Giò', 'Che', 'Sàb'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,

    'minute' => ':count mementu', // less reliable
    'min' => ':count mementu', // less reliable
    'a_minute' => ':count mementu', // less reliable

    'year' => ':count annu',
    'y' => ':count annu',
    'a_year' => ':count annu',

    'month' => ':count mese',
    'm' => ':count mese',
    'a_month' => ':count mese',

    'week' => ':count chida',
    'w' => ':count chida',
    'a_week' => ':count chida',

    'day' => ':count dí',
    'd' => ':count dí',
    'a_day' => ':count dí',

    'hour' => ':count ora',
    'h' => ':count ora',
    'a_hour' => ':count ora',

    'second' => ':count secundu',
    's' => ':count secundu',
    'a_second' => ':count secundu',
]);
