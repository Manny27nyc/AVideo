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
 * - Pablo Saratxaga pablo@mandrakesoft.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['yanvar', 'fevral', 'mart', 'aprel', 'may', 'iyun', 'iyul', 'avqust', 'sentyabr', 'oktyabr', 'noyabr', 'dekabr'],
    'months_short' => ['Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyn', 'İyl', 'Avq', 'Sen', 'Okt', 'Noy', 'Dek'],
    'weekdays' => ['bazar günü', 'birinci gün', 'ikinci gün', 'üçüncü gün', 'dördüncü gün', 'beşinci gün', 'altıncı gün'],
    'weekdays_short' => ['baz', 'bir', 'iki', 'üçü', 'dör', 'beş', 'alt'],
    'weekdays_min' => ['baz', 'bir', 'iki', 'üçü', 'dör', 'beş', 'alt'],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
]);
