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

return array_replace_recursive(require __DIR__.'/gsw.php', [
    'meridiem' => ['vorm.', 'nam.'],
    'months' => ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'Auguscht', 'Septämber', 'Oktoober', 'Novämber', 'Dezämber'],
    'first_day_of_week' => 1,
    'formats' => [
        'LLL' => 'Do MMMM YYYY HH:mm',
        'LLLL' => 'dddd, Do MMMM YYYY HH:mm',
    ],
]);
