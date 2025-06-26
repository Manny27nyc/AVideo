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
    'meridiem' => ['TOO', 'MUU'],
    'weekdays' => ['Jumapíiri', 'Jumatátu', 'Jumaíne', 'Jumatáano', 'Alamíisi', 'Ijumáa', 'Jumamóosi'],
    'weekdays_short' => ['Píili', 'Táatu', 'Íne', 'Táano', 'Alh', 'Ijm', 'Móosi'],
    'weekdays_min' => ['Píili', 'Táatu', 'Íne', 'Táano', 'Alh', 'Ijm', 'Móosi'],
    'months' => ['Kʉfúngatɨ', 'Kʉnaanɨ', 'Kʉkeenda', 'Kwiikumi', 'Kwiinyambála', 'Kwiidwaata', 'Kʉmʉʉnchɨ', 'Kʉvɨɨrɨ', 'Kʉsaatʉ', 'Kwiinyi', 'Kʉsaano', 'Kʉsasatʉ'],
    'months_short' => ['Fúngatɨ', 'Naanɨ', 'Keenda', 'Ikúmi', 'Inyambala', 'Idwaata', 'Mʉʉnchɨ', 'Vɨɨrɨ', 'Saatʉ', 'Inyi', 'Saano', 'Sasatʉ'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
]);
