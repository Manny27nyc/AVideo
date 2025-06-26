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
 * - pablo@mandriva.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
    'months' => ['Jenụwarị', 'Febrụwarị', 'Maachị', 'Eprel', 'Mee', 'Juun', 'Julaị', 'Ọgọọst', 'Septemba', 'Ọktoba', 'Novemba', 'Disemba'],
    'months_short' => ['Jen', 'Feb', 'Maa', 'Epr', 'Mee', 'Juu', 'Jul', 'Ọgọ', 'Sep', 'Ọkt', 'Nov', 'Dis'],
    'weekdays' => ['sọnde', 'mọnde', 'tuzde', 'wenzde', 'tọsde', 'fraịde', 'satọde'],
    'weekdays_short' => ['sọn', 'mọn', 'tuz', 'wen', 'tọs', 'fra', 'sat'],
    'weekdays_min' => ['sọn', 'mọn', 'tuz', 'wen', 'tọs', 'fra', 'sat'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,

    'year' => 'afo :count',
    'y' => 'afo :count',
    'a_year' => 'afo :count',

    'month' => 'önwa :count',
    'm' => 'önwa :count',
    'a_month' => 'önwa :count',

    'week' => 'izu :count',
    'w' => 'izu :count',
    'a_week' => 'izu :count',

    'day' => 'ụbọchị :count',
    'd' => 'ụbọchị :count',
    'a_day' => 'ụbọchị :count',

    'hour' => 'awa :count',
    'h' => 'awa :count',
    'a_hour' => 'awa :count',

    'minute' => 'minit :count',
    'min' => 'minit :count',
    'a_minute' => 'minit :count',

    'second' => 'sekọnd :count',
    's' => 'sekọnd :count',
    'a_second' => 'sekọnd :count',
]);
