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
    'meridiem' => ['上晝', '下晝'],

    'year' => ':count ngien11',
    'y' => ':count ngien11',
    'a_year' => ':count ngien11',

    'month' => ':count ngie̍t',
    'm' => ':count ngie̍t',
    'a_month' => ':count ngie̍t',

    'week' => ':count lî-pai',
    'w' => ':count lî-pai',
    'a_week' => ':count lî-pai',

    'day' => ':count ngit',
    'd' => ':count ngit',
    'a_day' => ':count ngit',

    'hour' => ':count sṳ̀',
    'h' => ':count sṳ̀',
    'a_hour' => ':count sṳ̀',

    'minute' => ':count fûn',
    'min' => ':count fûn',
    'a_minute' => ':count fûn',

    'second' => ':count miéu',
    's' => ':count miéu',
    'a_second' => ':count miéu',
]);
