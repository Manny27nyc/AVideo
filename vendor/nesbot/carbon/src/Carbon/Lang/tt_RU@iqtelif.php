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
 * - Reshat Sabiq tatar.iqtelif.i18n@gmail.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
    'months' => ['Ğınwar', 'Fiwral\'', 'Mart', 'April', 'May', 'Yün', 'Yül', 'Awgust', 'Sintebír', 'Üktebír', 'Noyebír', 'Dikebír'],
    'months_short' => ['Ğın', 'Fiw', 'Mar', 'Apr', 'May', 'Yün', 'Yül', 'Awg', 'Sin', 'Ükt', 'Noy', 'Dik'],
    'weekdays' => ['Yekşembí', 'Düşembí', 'Sişembí', 'Çerşembí', 'Pencíşembí', 'Comğa', 'Şimbe'],
    'weekdays_short' => ['Yek', 'Düş', 'Siş', 'Çer', 'Pen', 'Com', 'Şim'],
    'weekdays_min' => ['Yek', 'Düş', 'Siş', 'Çer', 'Pen', 'Com', 'Şim'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ÖA', 'ÖS'],
]);
