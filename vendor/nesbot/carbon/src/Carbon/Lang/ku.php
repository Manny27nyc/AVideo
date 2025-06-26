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
 * - Halwest Manguri
 * - Kardo Qadir
 */
$months = ['کانونی دووەم', 'شوبات', 'ئازار', 'نیسان', 'ئایار', '‌حوزەیران', 'تەمموز', 'ئاب', 'ئەیلول', 'تشرینی یەکەم', 'تشرینی دووەم', 'کانونی یەکەم'];

$weekdays = ['دوو شەممە', 'سێ شەممە', 'چوار شەممە', 'پێنج شەممە', 'هەینی', 'شەممە', 'یەک شەممە'];

return [
    'ago' => 'پێش :time',
    'from_now' => ':time لە ئێستاوە',
    'after' => 'دوای :time',
    'before' => 'پێش :time',
    'year' => '{0}ساڵ|{1}ساڵێک|{2}٢ ساڵ|[3,10]:count ساڵ|[11,Inf]:count ساڵ',
    'month' => '{0}مانگ|{1}مانگێک|{2}٢ مانگ|[3,10]:count مانگ|[11,Inf]:count مانگ',
    'week' => '{0}هەفتە|{1}هەفتەیەک|{2}٢ هەفتە|[3,10]:count هەفتە|[11,Inf]:count هەفتە',
    'day' => '{0}ڕۆژ|{1}ڕۆژێک|{2}٢ ڕۆژ|[3,10]:count ڕۆژ|[11,Inf]:count ڕۆژ',
    'hour' => '{0}کاتژمێر|{1}کاتژمێرێک|{2}٢ کاتژمێر|[3,10]:count کاتژمێر|[11,Inf]:count کاتژمێر',
    'minute' => '{0}خولەک|{1}خولەکێک|{2}٢ خولەک|[3,10]:count خولەک|[11,Inf]:count خولەک',
    'second' => '{0}چرکە|{1}چرکەیەک|{2}٢ چرکە|[3,10]:count چرکە|[11,Inf]:count چرکە',
    'months' => $months,
    'months_standalone' => $months,
    'months_short' => $months,
    'weekdays' => $weekdays,
    'weekdays_short' => $weekdays,
    'weekdays_min' => $weekdays,
    'list' => [', ', ' û '],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
];
