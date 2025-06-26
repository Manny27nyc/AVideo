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
 * - bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['جنوري', 'فروري', 'مارچ', 'اپريل', 'مٓی', 'جون', 'جولاي', 'اگست', 'ستمبر', 'اكتوبر', 'نومبر', 'دسمبر'],
    'months_short' => ['جنوري', 'فروري', 'مارچ', 'اپريل', 'مٓی', 'جون', 'جولاي', 'اگست', 'ستمبر', 'اكتوبر', 'نومبر', 'دسمبر'],
    'weekdays' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'weekdays_short' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'weekdays_min' => ['اتوار', 'پير', 'منگل', 'بدھ', 'جمعرات', 'جمعه', 'هفته'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ص', 'ش'],
]);
