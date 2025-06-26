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
 * - Atef Ben Ali (atefBB)
 * - Ibrahim AshShohail
 * - MLTDev
 */

$months = [
    'يناير',
    'فبراير',
    'مارس',
    'أبريل',
    'مايو',
    'يونيو',
    'يوليو',
    'أغسطس',
    'سبتمبر',
    'أكتوبر',
    'نوفمبر',
    'ديسمبر',
];

return [
    'year' => implode('|', [':count سنة', 'سنة', 'سنتين', ':count سنوات', ':count سنة']),
    'a_year' => implode('|', [':count سنة', 'سنة', 'سنتين', ':count سنوات', ':count سنة']),
    'month' => implode('|', [':count شهر', 'شهر', 'شهرين', ':count أشهر', ':count شهر']),
    'a_month' => implode('|', [':count شهر', 'شهر', 'شهرين', ':count أشهر', ':count شهر']),
    'week' => implode('|', [':count أسبوع', 'أسبوع', 'أسبوعين', ':count أسابيع', ':count أسبوع']),
    'a_week' => implode('|', [':count أسبوع', 'أسبوع', 'أسبوعين', ':count أسابيع', ':count أسبوع']),
    'day' => implode('|', [':count يوم', 'يوم', 'يومين', ':count أيام', ':count يوم']),
    'a_day' => implode('|', [':count يوم', 'يوم', 'يومين', ':count أيام', ':count يوم']),
    'hour' => implode('|', [':count ساعة', 'ساعة', 'ساعتين', ':count ساعات', ':count ساعة']),
    'a_hour' => implode('|', [':count ساعة', 'ساعة', 'ساعتين', ':count ساعات', ':count ساعة']),
    'minute' => implode('|', [':count دقيقة', 'دقيقة', 'دقيقتين', ':count دقائق', ':count دقيقة']),
    'a_minute' => implode('|', [':count دقيقة', 'دقيقة', 'دقيقتين', ':count دقائق', ':count دقيقة']),
    'second' => implode('|', [':count ثانية', 'ثانية', 'ثانيتين', ':count ثواني', ':count ثانية']),
    'a_second' => implode('|', [':count ثانية', 'ثانية', 'ثانيتين', ':count ثواني', ':count ثانية']),
    'ago' => 'منذ :time',
    'from_now' => ':time من الآن',
    'after' => 'بعد :time',
    'before' => 'قبل :time',
    'diff_now' => 'الآن',
    'diff_today' => 'اليوم',
    'diff_today_regexp' => 'اليوم(?:\\s+عند)?(?:\\s+الساعة)?',
    'diff_yesterday' => 'أمس',
    'diff_yesterday_regexp' => 'أمس(?:\\s+عند)?(?:\\s+الساعة)?',
    'diff_tomorrow' => 'غداً',
    'diff_tomorrow_regexp' => 'غدًا(?:\\s+عند)?(?:\\s+الساعة)?',
    'diff_before_yesterday' => 'قبل الأمس',
    'diff_after_tomorrow' => 'بعد غد',
    'period_recurrences' => implode('|', ['مرة', 'مرة', ':count مرتين', ':count مرات', ':count مرة']),
    'period_interval' => 'كل :interval',
    'period_start_date' => 'من :date',
    'period_end_date' => 'إلى :date',
    'months' => $months,
    'months_short' => $months,
    'weekdays' => ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
    'weekdays_short' => ['أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
    'weekdays_min' => ['ح', 'اث', 'ثل', 'أر', 'خم', 'ج', 'س'],
    'list' => ['، ', ' و '],
    'first_day_of_week' => 6,
    'day_of_first_week_of_year' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D/M/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[اليوم عند الساعة] LT',
        'nextDay' => '[غدًا عند الساعة] LT',
        'nextWeek' => 'dddd [عند الساعة] LT',
        'lastDay' => '[أمس عند الساعة] LT',
        'lastWeek' => 'dddd [عند الساعة] LT',
        'sameElse' => 'L',
    ],
    'meridiem' => ['ص', 'م'],
    'weekend' => [5, 6],
];
