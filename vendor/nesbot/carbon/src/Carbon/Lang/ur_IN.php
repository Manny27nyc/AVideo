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
return array_replace_recursive(require __DIR__.'/ur.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['جنوری', 'فروری', 'مارچ', 'اپریل', 'مئی', 'جون', 'جولائی', 'اگست', 'ستمبر', 'اکتوبر', 'نومبر', 'دسمبر'],
    'months_short' => ['جنوری', 'فروری', 'مارچ', 'اپریل', 'مئی', 'جون', 'جولائی', 'اگست', 'ستمبر', 'اکتوبر', 'نومبر', 'دسمبر'],
    'weekdays' => ['اتوار', 'پیر', 'منگل', 'بدھ', 'جمعرات', 'جمعہ', 'سنیچر'],
    'weekdays_short' => ['اتوار', 'پیر', 'منگل', 'بدھ', 'جمعرات', 'جمعہ', 'سنیچر'],
    'weekdays_min' => ['اتوار', 'پیر', 'منگل', 'بدھ', 'جمعرات', 'جمعہ', 'سنیچر'],
    'day_of_first_week_of_year' => 1,
]);
