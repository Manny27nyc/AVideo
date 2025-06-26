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
 * - Bari Badamshin
 * - Jørn Ølmheim
 * - François B
 * - Tim Fish
 * - Коренберг Марк (imac)
 * - Serhan Apaydın
 * - RomeroMsk
 * - vsn4ik
 * - JD Isaacks
 * - Bari Badamshin
 * - Jørn Ølmheim
 * - François B
 * - Коренберг Марк (imac)
 * - Serhan Apaydın
 * - RomeroMsk
 * - vsn4ik
 * - JD Isaacks
 * - Fellzo
 * - andrey-helldar
 * - Pavel Skripkin (psxx)
 * - AlexWalkerson
 * - Vladislav UnsealedOne
 * - dima-bzz
 */

use Carbon\CarbonInterface;

$transformDiff = function ($input) {
    return strtr($input, [
        'неделя' => 'неделю',
        'секунда' => 'секунду',
        'минута' => 'минуту',
    ]);
};

return [
    'year' => ':count год|:count года|:count лет',
    'y' => ':count г.|:count г.|:count л.',
    'a_year' => '{1}год|:count год|:count года|:count лет',
    'month' => ':count месяц|:count месяца|:count месяцев',
    'm' => ':count мес.',
    'a_month' => '{1}месяц|:count месяц|:count месяца|:count месяцев',
    'week' => ':count неделя|:count недели|:count недель',
    'w' => ':count нед.',
    'a_week' => '{1}неделя|:count неделю|:count недели|:count недель',
    'day' => ':count день|:count дня|:count дней',
    'd' => ':count д.',
    'a_day' => '{1}день|:count день|:count дня|:count дней',
    'hour' => ':count час|:count часа|:count часов',
    'h' => ':count ч.',
    'a_hour' => '{1}час|:count час|:count часа|:count часов',
    'minute' => ':count минута|:count минуты|:count минут',
    'min' => ':count мин.',
    'a_minute' => '{1}минута|:count минута|:count минуты|:count минут',
    'second' => ':count секунда|:count секунды|:count секунд',
    's' => ':count сек.',
    'a_second' => '{1}несколько секунд|:count секунду|:count секунды|:count секунд',
    'ago' => function ($time) use ($transformDiff) {
        return $transformDiff($time).' назад';
    },
    'from_now' => function ($time) use ($transformDiff) {
        return 'через '.$transformDiff($time);
    },
    'after' => function ($time) use ($transformDiff) {
        return $transformDiff($time).' после';
    },
    'before' => function ($time) use ($transformDiff) {
        return $transformDiff($time).' до';
    },
    'diff_now' => 'только что',
    'diff_today' => 'Сегодня,',
    'diff_today_regexp' => 'Сегодня,?(?:\\s+в)?',
    'diff_yesterday' => 'вчера',
    'diff_yesterday_regexp' => 'Вчера,?(?:\\s+в)?',
    'diff_tomorrow' => 'завтра',
    'diff_tomorrow_regexp' => 'Завтра,?(?:\\s+в)?',
    'diff_before_yesterday' => 'позавчера',
    'diff_after_tomorrow' => 'послезавтра',
    'formats' => [
        'LT' => 'H:mm',
        'LTS' => 'H:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'D MMMM YYYY г.',
        'LLL' => 'D MMMM YYYY г., H:mm',
        'LLLL' => 'dddd, D MMMM YYYY г., H:mm',
    ],
    'calendar' => [
        'sameDay' => '[Сегодня, в] LT',
        'nextDay' => '[Завтра, в] LT',
        'nextWeek' => function (CarbonInterface $current, CarbonInterface $other) {
            if ($current->week !== $other->week) {
                switch ($current->dayOfWeek) {
                    case 0:
                        return '[В следующее] dddd, [в] LT';
                    case 1:
                    case 2:
                    case 4:
                        return '[В следующий] dddd, [в] LT';
                    case 3:
                    case 5:
                    case 6:
                        return '[В следующую] dddd, [в] LT';
                }
            }

            if ($current->dayOfWeek === 2) {
                return '[Во] dddd, [в] LT';
            }

            return '[В] dddd, [в] LT';
        },
        'lastDay' => '[Вчера, в] LT',
        'lastWeek' => function (CarbonInterface $current, CarbonInterface $other) {
            if ($current->week !== $other->week) {
                switch ($current->dayOfWeek) {
                    case 0:
                        return '[В прошлое] dddd, [в] LT';
                    case 1:
                    case 2:
                    case 4:
                        return '[В прошлый] dddd, [в] LT';
                    case 3:
                    case 5:
                    case 6:
                        return '[В прошлую] dddd, [в] LT';
                }
            }

            if ($current->dayOfWeek === 2) {
                return '[Во] dddd, [в] LT';
            }

            return '[В] dddd, [в] LT';
        },
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number, $period) {
        switch ($period) {
            case 'M':
            case 'd':
            case 'DDD':
                return $number.'-й';
            case 'D':
                return $number.'-го';
            case 'w':
            case 'W':
                return $number.'-я';
            default:
                return $number;
        }
    },
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'ночи';
        }
        if ($hour < 12) {
            return 'утра';
        }
        if ($hour < 17) {
            return 'дня';
        }

        return 'вечера';
    },
    'months' => ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'],
    'months_standalone' => ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'],
    'months_short' => ['янв', 'фев', 'мар', 'апр', 'мая', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
    'months_short_standalone' => ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
    'months_regexp' => '/(DD?o?\.?(\[[^\[\]]*\]|\s)+MMMM?|L{2,4}|l{2,4})/',
    'weekdays' => ['воскресенье', 'понедельник', 'вторник', 'среду', 'четверг', 'пятницу', 'субботу'],
    'weekdays_standalone' => ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
    'weekdays_short' => ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
    'weekdays_min' => ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'],
    'weekdays_regexp' => '/\[\s*(В|в)\s*((?:прошлую|следующую|эту)\s*)?\]\s*dddd/',
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' и '],
];
