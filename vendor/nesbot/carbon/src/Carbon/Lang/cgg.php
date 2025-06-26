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
    'weekdays' => ['Sande', 'Orwokubanza', 'Orwakabiri', 'Orwakashatu', 'Orwakana', 'Orwakataano', 'Orwamukaaga'],
    'weekdays_short' => ['SAN', 'ORK', 'OKB', 'OKS', 'OKN', 'OKT', 'OMK'],
    'weekdays_min' => ['SAN', 'ORK', 'OKB', 'OKS', 'OKN', 'OKT', 'OMK'],
    'months' => ['Okwokubanza', 'Okwakabiri', 'Okwakashatu', 'Okwakana', 'Okwakataana', 'Okwamukaaga', 'Okwamushanju', 'Okwamunaana', 'Okwamwenda', 'Okwaikumi', 'Okwaikumi na kumwe', 'Okwaikumi na ibiri'],
    'months_short' => ['KBZ', 'KBR', 'KST', 'KKN', 'KTN', 'KMK', 'KMS', 'KMN', 'KMW', 'KKM', 'KNK', 'KNB'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],

    'day' => ':count ruhanga', // less reliable
    'd' => ':count ruhanga', // less reliable
    'a_day' => ':count ruhanga', // less reliable
]);
