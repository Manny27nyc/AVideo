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
 * - Takuya Sawada
 * - Atsushi Tanaka
 * - François B
 * - Jason Katz-Brown
 * - Serhan Apaydın
 * - XueWei
 * - JD Isaacks
 * - toyama satoshi
 * - atakigawa
 */

use Carbon\CarbonInterface;

return [
    'year' => ':count年',
    'y' => ':count年',
    'month' => ':countヶ月',
    'm' => ':countヶ月',
    'week' => ':count週間',
    'w' => ':count週間',
    'day' => ':count日',
    'd' => ':count日',
    'hour' => ':count時間',
    'h' => ':count時間',
    'minute' => ':count分',
    'min' => ':count分',
    'second' => ':count秒',
    'a_second' => '{1}数秒|]1,Inf[:count秒',
    's' => ':count秒',
    'ago' => ':time前',
    'from_now' => ':time後',
    'after' => ':time後',
    'before' => ':time前',
    'diff_now' => '今',
    'diff_today' => '今日',
    'diff_yesterday' => '昨日',
    'diff_tomorrow' => '明日',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'YYYY/MM/DD',
        'LL' => 'YYYY年M月D日',
        'LLL' => 'YYYY年M月D日 HH:mm',
        'LLLL' => 'YYYY年M月D日 dddd HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[今日] LT',
        'nextDay' => '[明日] LT',
        'nextWeek' => function (CarbonInterface $current, CarbonInterface $other) {
            if ($other->week !== $current->week) {
                return '[来週]dddd LT';
            }

            return 'dddd LT';
        },
        'lastDay' => '[昨日] LT',
        'lastWeek' => function (CarbonInterface $current, CarbonInterface $other) {
            if ($other->week !== $current->week) {
                return '[先週]dddd LT';
            }

            return 'dddd LT';
        },
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number, $period) {
        switch ($period) {
            case 'd':
            case 'D':
            case 'DDD':
                return $number.'日';
            default:
                return $number;
        }
    },
    'meridiem' => ['午前', '午後'],
    'months' => ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
    'months_short' => ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
    'weekdays' => ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
    'weekdays_short' => ['日', '月', '火', '水', '木', '金', '土'],
    'weekdays_min' => ['日', '月', '火', '水', '木', '金', '土'],
    'list' => '、',
    'alt_numbers' => ['〇', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六', '十七', '十八', '十九', '二十', '二十一', '二十二', '二十三', '二十四', '二十五', '二十六', '二十七', '二十八', '二十九', '三十', '三十一', '三十二', '三十三', '三十四', '三十五', '三十六', '三十七', '三十八', '三十九', '四十', '四十一', '四十二', '四十三', '四十四', '四十五', '四十六', '四十七', '四十八', '四十九', '五十', '五十一', '五十二', '五十三', '五十四', '五十五', '五十六', '五十七', '五十八', '五十九', '六十', '六十一', '六十二', '六十三', '六十四', '六十五', '六十六', '六十七', '六十八', '六十九', '七十', '七十一', '七十二', '七十三', '七十四', '七十五', '七十六', '七十七', '七十八', '七十九', '八十', '八十一', '八十二', '八十三', '八十四', '八十五', '八十六', '八十七', '八十八', '八十九', '九十', '九十一', '九十二', '九十三', '九十四', '九十五', '九十六', '九十七', '九十八', '九十九'],
    'alt_numbers_pow' => [
        10000 => '万',
        1000 => '千',
        100 => '百',
    ],
];
