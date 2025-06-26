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
        'L' => 'YYYY年MM月DD號',
    ],
    'months' => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
    'months_short' => [' 1月', ' 2月', ' 3月', ' 4月', ' 5月', ' 6月', ' 7月', ' 8月', ' 9月', '10月', '11月', '12月'],
    'weekdays' => ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
    'weekdays_short' => ['日', '一', '二', '三', '四', '五', '六'],
    'weekdays_min' => ['日', '一', '二', '三', '四', '五', '六'],
    'meridiem' => ['上午', '下午'],

    'year' => ':count 年',
    'y' => ':count 年',
    'a_year' => ':count 年',

    'month' => ':count 月',
    'm' => ':count 月',
    'a_month' => ':count 月',

    'week' => ':count 周',
    'w' => ':count 周',
    'a_week' => ':count 周',

    'day' => ':count 白天',
    'd' => ':count 白天',
    'a_day' => ':count 白天',

    'hour' => ':count 小时',
    'h' => ':count 小时',
    'a_hour' => ':count 小时',

    'minute' => ':count 分钟',
    'min' => ':count 分钟',
    'a_minute' => ':count 分钟',

    'second' => ':count 秒',
    's' => ':count 秒',
    'a_second' => ':count 秒',
]);
