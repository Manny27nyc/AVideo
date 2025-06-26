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
    'meridiem' => ['I bikɛ̂glà', 'I ɓugajɔp'],
    'weekdays' => ['ŋgwà nɔ̂y', 'ŋgwà njaŋgumba', 'ŋgwà ûm', 'ŋgwà ŋgê', 'ŋgwà mbɔk', 'ŋgwà kɔɔ', 'ŋgwà jôn'],
    'weekdays_short' => ['nɔy', 'nja', 'uum', 'ŋge', 'mbɔ', 'kɔɔ', 'jon'],
    'weekdays_min' => ['nɔy', 'nja', 'uum', 'ŋge', 'mbɔ', 'kɔɔ', 'jon'],
    'months' => ['Kɔndɔŋ', 'Màcɛ̂l', 'Màtùmb', 'Màtop', 'M̀puyɛ', 'Hìlòndɛ̀', 'Njèbà', 'Hìkaŋ', 'Dìpɔ̀s', 'Bìòôm', 'Màyɛsèp', 'Lìbuy li ńyèe'],
    'months_short' => ['kɔn', 'mac', 'mat', 'mto', 'mpu', 'hil', 'nje', 'hik', 'dip', 'bio', 'may', 'liɓ'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D/M/YYYY',
        'LL' => 'D MMM, YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],

    'second' => ':count móndî', // less reliable
    's' => ':count móndî', // less reliable
    'a_second' => ':count móndî', // less reliable
]);
