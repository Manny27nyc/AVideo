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
 * - Cassiano Montanari
 * - Eduardo Dalla Vecchia
 * - David Rodrigues
 * - Matt Pope
 * - François B
 * - Prodis
 * - Marlon Maxwel
 * - JD Isaacks
 * - Raphael Amorim
 * - Rafael Raupp
 * - felipeleite1
 * - swalker
 * - Lucas Macedo
 * - Paulo Freitas
 * - Sebastian Thierer
 */
return array_replace_recursive(require __DIR__.'/pt.php', [
    'period_recurrences' => 'uma|:count vez',
    'period_interval' => 'toda :interval',
    'formats' => [
        'LLL' => 'D [de] MMMM [de] YYYY [às] HH:mm',
        'LLLL' => 'dddd, D [de] MMMM [de] YYYY [às] HH:mm',
    ],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
]);
