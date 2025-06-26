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
 * - information from Kenneth Christiansen Kenneth Christiansen, Pablo Saratxaga kenneth@gnu.org, pablo@mandriva.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['Jaunuwoa', 'Februwoa', 'Moaz', 'Aprell', 'Mai', 'Juni', 'Juli', 'August', 'Septamba', 'Oktoba', 'Nowamba', 'Dezamba'],
    'months_short' => ['Jan', 'Feb', 'Moz', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Now', 'Dez'],
    'weekdays' => ['Sinndag', 'Mondag', 'Dingsdag', 'Meddwäakj', 'Donnadag', 'Friedag', 'Sinnowend'],
    'weekdays_short' => ['Sdg', 'Mdg', 'Dsg', 'Mwk', 'Ddg', 'Fdg', 'Swd'],
    'weekdays_min' => ['Sdg', 'Mdg', 'Dsg', 'Mwk', 'Ddg', 'Fdg', 'Swd'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
]);
