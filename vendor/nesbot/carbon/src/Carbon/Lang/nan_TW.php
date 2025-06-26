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
        'L' => 'YYYY年MM月DD日',
    ],
    'months' => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
    'months_short' => [' 1月', ' 2月', ' 3月', ' 4月', ' 5月', ' 6月', ' 7月', ' 8月', ' 9月', '10月', '11月', '12月'],
    'weekdays' => ['禮拜日', '禮拜一', '禮拜二', '禮拜三', '禮拜四', '禮拜五', '禮拜六'],
    'weekdays_short' => ['日', '一', '二', '三', '四', '五', '六'],
    'weekdays_min' => ['日', '一', '二', '三', '四', '五', '六'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['頂晡', '下晡'],

    'year' => ':count 年',
    'y' => ':count 年',
    'a_year' => ':count 年',

    'month' => ':count goe̍h',
    'm' => ':count goe̍h',
    'a_month' => ':count goe̍h',

    'week' => ':count lé-pài',
    'w' => ':count lé-pài',
    'a_week' => ':count lé-pài',

    'day' => ':count 日',
    'd' => ':count 日',
    'a_day' => ':count 日',

    'hour' => ':count tiám-cheng',
    'h' => ':count tiám-cheng',
    'a_hour' => ':count tiám-cheng',

    'minute' => ':count Hun-cheng',
    'min' => ':count Hun-cheng',
    'a_minute' => ':count Hun-cheng',

    'second' => ':count Bió',
    's' => ':count Bió',
    'a_second' => ':count Bió',
]);
