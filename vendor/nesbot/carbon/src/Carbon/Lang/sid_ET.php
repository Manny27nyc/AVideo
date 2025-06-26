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
 * - Ge'ez Frontier Foundation    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    'months_short' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    'weekdays' => ['Sambata', 'Sanyo', 'Maakisanyo', 'Roowe', 'Hamuse', 'Arbe', 'Qidaame'],
    'weekdays_short' => ['Sam', 'San', 'Mak', 'Row', 'Ham', 'Arb', 'Qid'],
    'weekdays_min' => ['Sam', 'San', 'Mak', 'Row', 'Ham', 'Arb', 'Qid'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['soodo', 'hawwaro'],
]);
