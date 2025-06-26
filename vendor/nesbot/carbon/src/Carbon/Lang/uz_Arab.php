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

return array_replace_recursive(require __DIR__.'/fa.php', [
    'weekdays' => ['یکشنبه', 'دوشنبه', 'سه‌شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه'],
    'weekdays_short' => ['ی.', 'د.', 'س.', 'چ.', 'پ.', 'ج.', 'ش.'],
    'weekdays_min' => ['ی.', 'د.', 'س.', 'چ.', 'پ.', 'ج.', 'ش.'],
    'months' => ['جنوری', 'فبروری', 'مارچ', 'اپریل', 'می', 'جون', 'جولای', 'اگست', 'سپتمبر', 'اکتوبر', 'نومبر', 'دسمبر'],
    'months_short' => ['جنو', 'فبر', 'مار', 'اپر', 'می', 'جون', 'جول', 'اگس', 'سپت', 'اکت', 'نوم', 'دسم'],
    'first_day_of_week' => 6,
    'weekend' => [4, 5],
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'YYYY-MM-dd',
        'LL' => 'YYYY MMM D',
        'LLL' => 'YYYY MMMM D HH:mm',
        'LLLL' => 'YYYY MMMM D, dddd HH:mm',
    ],
]);
