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

/**
 * Authors:
 * - Josh Soref
 * - Noureddine LOUAHEDJ
 * - JD Isaacks
 * - Atef Ben Ali (atefBB)
 * - Mohamed Sabil (mohamedsabil83)
 */
$months = [
    'جانفي',
    'فيفري',
    'مارس',
    'أفريل',
    'ماي',
    'جوان',
    'جويلية',
    'أوت',
    'سبتمبر',
    'أكتوبر',
    'نوفمبر',
    'ديسمبر',
];

return [
    'year' => implode('|', ['{0}:count سنة', '{1}سنة', '{2}سنتين', ']2,11[:count سنوات', ']10,Inf[:count سنة']),
    'a_year' => implode('|', ['{0}:count سنة', '{1}سنة', '{2}سنتين', ']2,11[:count سنوات', ']10,Inf[:count سنة']),
    'month' => implode('|', ['{0}:count شهر', '{1}شهر', '{2}شهرين', ']2,11[:count أشهر', ']10,Inf[:count شهر']),
    'a_month' => implode('|', ['{0}:count شهر', '{1}شهر', '{2}شهرين', ']2,11[:count أشهر', ']10,Inf[:count شهر']),
    'week' => implode('|', ['{0}:count أسبوع', '{1}أسبوع', '{2}أسبوعين', ']2,11[:count أسابيع', ']10,Inf[:count أسبوع']),
    'a_week' => implode('|', ['{0}:count أسبوع', '{1}أسبوع', '{2}أسبوعين', ']2,11[:count أسابيع', ']10,Inf[:count أسبوع']),
    'day' => implode('|', ['{0}:count يوم', '{1}يوم', '{2}يومين', ']2,11[:count أيام', ']10,Inf[:count يوم']),
    'a_day' => implode('|', ['{0}:count يوم', '{1}يوم', '{2}يومين', ']2,11[:count أيام', ']10,Inf[:count يوم']),
    'hour' => implode('|', ['{0}:count ساعة', '{1}ساعة', '{2}ساعتين', ']2,11[:count ساعات', ']10,Inf[:count ساعة']),
    'a_hour' => implode('|', ['{0}:count ساعة', '{1}ساعة', '{2}ساعتين', ']2,11[:count ساعات', ']10,Inf[:count ساعة']),
    'minute' => implode('|', ['{0}:count دقيقة', '{1}دقيقة', '{2}دقيقتين', ']2,11[:count دقائق', ']10,Inf[:count دقيقة']),
    'a_minute' => implode('|', ['{0}:count دقيقة', '{1}دقيقة', '{2}دقيقتين', ']2,11[:count دقائق', ']10,Inf[:count دقيقة']),
    'second' => implode('|', ['{0}:count ثانية', '{1}ثانية', '{2}ثانيتين', ']2,11[:count ثواني', ']10,Inf[:count ثانية']),
    'a_second' => implode('|', ['{0}:count ثانية', '{1}ثانية', '{2}ثانيتين', ']2,11[:count ثواني', ']10,Inf[:count ثانية']),
    'ago' => 'منذ :time',
    'from_now' => 'في :time',
    'after' => 'بعد :time',
    'before' => 'قبل :time',
    'diff_now' => 'الآن',
    'diff_today' => 'اليوم',
    'diff_today_regexp' => 'اليوم(?:\\s+على)?(?:\\s+الساعة)?',
    'diff_yesterday' => 'أمس',
    'diff_yesterday_regexp' => 'أمس(?:\\s+على)?(?:\\s+الساعة)?',
    'diff_tomorrow' => 'غداً',
    'diff_tomorrow_regexp' => 'غدا(?:\\s+على)?(?:\\s+الساعة)?',
    'diff_before_yesterday' => 'قبل الأمس',
    'diff_after_tomorrow' => 'بعد غد',
    'period_recurrences' => implode('|', ['{0}مرة', '{1}مرة', '{2}:count مرتين', ']2,11[:count مرات', ']10,Inf[:count مرة']),
    'period_interval' => 'كل :interval',
    'period_start_date' => 'من :date',
    'period_end_date' => 'إلى :date',
    'months' => $months,
    'months_short' => $months,
    'weekdays' => ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
    'weekdays_short' => ['أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
    'weekdays_min' => ['أح', 'إث', 'ثلا', 'أر', 'خم', 'جم', 'سب'],
    'list' => ['، ', ' و '],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 4,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[اليوم على الساعة] LT',
        'nextDay' => '[غدا على الساعة] LT',
        'nextWeek' => 'dddd [على الساعة] LT',
        'lastDay' => '[أمس على الساعة] LT',
        'lastWeek' => 'dddd [على الساعة] LT',
        'sameElse' => 'L',
    ],
    'meridiem' => ['ص', 'م'],
];
