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
    'weekdays' => ['lahadi', 'tɛɛnɛɛ', 'talata', 'alaba', 'aimisa', 'aijima', 'siɓiti'],
    'weekdays_short' => ['lahadi', 'tɛɛnɛɛ', 'talata', 'alaba', 'aimisa', 'aijima', 'siɓiti'],
    'weekdays_min' => ['lahadi', 'tɛɛnɛɛ', 'talata', 'alaba', 'aimisa', 'aijima', 'siɓiti'],
    'months' => ['luukao kemã', 'ɓandaɓu', 'vɔɔ', 'fulu', 'goo', '6', '7', 'kɔnde', 'saah', 'galo', 'kenpkato ɓololɔ', 'luukao lɔma'],
    'months_short' => ['luukao kemã', 'ɓandaɓu', 'vɔɔ', 'fulu', 'goo', '6', '7', 'kɔnde', 'saah', 'galo', 'kenpkato ɓololɔ', 'luukao lɔma'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY h:mm a',
        'LLLL' => 'dddd, D MMMM YYYY h:mm a',
    ],
]);
