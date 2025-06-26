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

return array_replace_recursive(require __DIR__.'/en.php', [
    'meridiem' => ['Subbaahi', 'Zaarikay b'],
    'weekdays' => ['Alhadi', 'Atinni', 'Atalaata', 'Alarba', 'Alhamisi', 'Alzuma', 'Asibti'],
    'weekdays_short' => ['Alh', 'Ati', 'Ata', 'Ala', 'Alm', 'Alz', 'Asi'],
    'weekdays_min' => ['Alh', 'Ati', 'Ata', 'Ala', 'Alm', 'Alz', 'Asi'],
    'months' => ['Žanwiye', 'Feewiriye', 'Marsi', 'Awiril', 'Me', 'Žuweŋ', 'Žuyye', 'Ut', 'Sektanbur', 'Oktoobur', 'Noowanbur', 'Deesanbur'],
    'months_short' => ['Žan', 'Fee', 'Mar', 'Awi', 'Me', 'Žuw', 'Žuy', 'Ut', 'Sek', 'Okt', 'Noo', 'Dee'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D/M/YYYY',
        'LL' => 'D MMM, YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],

    'year' => ':count hari', // less reliable
    'y' => ':count hari', // less reliable
    'a_year' => ':count hari', // less reliable

    'week' => ':count alzuma', // less reliable
    'w' => ':count alzuma', // less reliable
    'a_week' => ':count alzuma', // less reliable

    'second' => ':count atinni', // less reliable
    's' => ':count atinni', // less reliable
    'a_second' => ':count atinni', // less reliable
]);
