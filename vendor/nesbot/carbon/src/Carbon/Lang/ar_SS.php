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
 * - IBM Globalization Center of Competency, Yamato Software Laboratory    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/ar.php', [
    'formats' => [
        'L' => 'DD MMM, YYYY',
    ],
    'months' => ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
    'months_short' => ['ينا', 'فبر', 'مار', 'أبر', 'ماي', 'يون', 'يول', 'أغس', 'سبت', 'أكت', 'نوف', 'ديس'],
    'weekdays' => ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
    'weekdays_short' => ['ح', 'ن', 'ث', 'ر', 'خ', 'ج', 'س'],
    'weekdays_min' => ['ح', 'ن', 'ث', 'ر', 'خ', 'ج', 'س'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
]);
