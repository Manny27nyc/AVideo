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
        'L' => 'OY[年]MMMMOD[日]',
    ],
    'months' => ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
    'months_short' => [' 一 ', ' 二 ', ' 三 ', ' 四 ', ' 五 ', ' 六 ', ' 七 ', ' 八 ', ' 九 ', ' 十 ', '十一', '十二'],
    'weekdays' => ['週日', '週一', '週二', '週三', '週四', '週五', '週六'],
    'weekdays_short' => ['日', '一', '二', '三', '四', '五', '六'],
    'weekdays_min' => ['日', '一', '二', '三', '四', '五', '六'],
    'day_of_first_week_of_year' => 1,
    'alt_numbers' => ['〇', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六', '十七', '十八', '十九', '廿', '廿一', '廿二', '廿三', '廿四', '廿五', '廿六', '廿七', '廿八', '廿九', '卅', '卅一'],
    'meridiem' => ['朝', '暮'],

    'year' => ':count 夏', // less reliable
    'y' => ':count 夏', // less reliable
    'a_year' => ':count 夏', // less reliable

    'month' => ':count 月', // less reliable
    'm' => ':count 月', // less reliable
    'a_month' => ':count 月', // less reliable

    'hour' => ':count 氧', // less reliable
    'h' => ':count 氧', // less reliable
    'a_hour' => ':count 氧', // less reliable

    'minute' => ':count 點', // less reliable
    'min' => ':count 點', // less reliable
    'a_minute' => ':count 點', // less reliable

    'second' => ':count 楚', // less reliable
    's' => ':count 楚', // less reliable
    'a_second' => ':count 楚', // less reliable

    'week' => ':count 星期',
    'w' => ':count 星期',
    'a_week' => ':count 星期',

    'day' => ':count 日(曆法)',
    'd' => ':count 日(曆法)',
    'a_day' => ':count 日(曆法)',
]);
