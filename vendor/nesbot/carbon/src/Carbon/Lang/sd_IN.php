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
 * - Red Hat, Pune    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/sd.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['جنوري', 'فبروري', 'مارچ', 'اپريل', 'مي', 'جون', 'جولاءِ', 'آگسٽ', 'سيپٽيمبر', 'آڪٽوبر', 'نومبر', 'ڊسمبر'],
    'months_short' => ['جنوري', 'فبروري', 'مارچ', 'اپريل', 'مي', 'جون', 'جولاءِ', 'آگسٽ', 'سيپٽيمبر', 'آڪٽوبر', 'نومبر', 'ڊسمبر'],
    'weekdays' => ['آرتوارُ', 'سومرُ', 'منگلُ', 'ٻُڌرُ', 'وسپت', 'جُمو', 'ڇنڇر'],
    'weekdays_short' => ['آرتوارُ', 'سومرُ', 'منگلُ', 'ٻُڌرُ', 'وسپت', 'جُمو', 'ڇنڇر'],
    'weekdays_min' => ['آرتوارُ', 'سومرُ', 'منگلُ', 'ٻُڌرُ', 'وسپت', 'جُمو', 'ڇنڇر'],
    'day_of_first_week_of_year' => 1,
]);
