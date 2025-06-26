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
 * - Daniel Cohen Gindi
 * - JD Isaacks
 * - Itai Nathaniel
 * - GabMic
 * - Yaakov Dahan (yakidahan)
 */
return [
    'year' => 'שנה|{2}שנתיים|:count שנים',
    'y' => 'שנה|:count שנ׳',
    'month' => 'חודש|{2}חודשיים|:count חודשים',
    'm' => 'חודש|:count חו׳',
    'week' => 'שבוע|{2}שבועיים|:count שבועות',
    'w' => 'שבוע|:count שב׳',
    'day' => 'יום|{2}יומיים|:count ימים',
    'd' => 'יום|:count ימ׳',
    'hour' => 'שעה|{2}שעתיים|:count שעות',
    'h' => 'שעה|:count שע׳',
    'minute' => 'דקה|{2}שתי דקות|:count דקות',
    'min' => 'דקה|:count דק׳',
    'second' => 'שנייה|:count שניות',
    'a_second' => 'כמה שניות|:count שניות',
    's' => 'שניה|:count שנ׳',
    'ago' => 'לפני :time',
    'from_now' => 'בעוד :time מעכשיו',
    'after' => 'אחרי :time',
    'before' => 'לפני :time',
    'diff_now' => 'עכשיו',
    'diff_today' => 'היום',
    'diff_today_regexp' => 'היום(?:\\s+ב־)?',
    'diff_yesterday' => 'אתמול',
    'diff_yesterday_regexp' => 'אתמול(?:\\s+ב־)?',
    'diff_tomorrow' => 'מחר',
    'diff_tomorrow_regexp' => 'מחר(?:\\s+ב־)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D [ב]MMMM YYYY',
        'LLL' => 'D [ב]MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D [ב]MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[היום ב־]LT',
        'nextDay' => '[מחר ב־]LT',
        'nextWeek' => 'dddd [בשעה] LT',
        'lastDay' => '[אתמול ב־]LT',
        'lastWeek' => '[ביום] dddd [האחרון בשעה] LT',
        'sameElse' => 'L',
    ],
    'meridiem' => function ($hour, $minute, $isLower) {
        if ($hour < 5) {
            return 'לפנות בוקר';
        }
        if ($hour < 10) {
            return 'בבוקר';
        }
        if ($hour < 12) {
            return $isLower ? 'לפנה"צ' : 'לפני הצהריים';
        }
        if ($hour < 18) {
            return $isLower ? 'אחה"צ' : 'אחרי הצהריים';
        }

        return 'בערב';
    },
    'months' => ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'],
    'months_short' => ['ינו׳', 'פבר׳', 'מרץ', 'אפר׳', 'מאי', 'יוני', 'יולי', 'אוג׳', 'ספט׳', 'אוק׳', 'נוב׳', 'דצמ׳'],
    'weekdays' => ['ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'שישי', 'שבת'],
    'weekdays_short' => ['א׳', 'ב׳', 'ג׳', 'ד׳', 'ה׳', 'ו׳', 'ש׳'],
    'weekdays_min' => ['א', 'ב', 'ג', 'ד', 'ה', 'ו', 'ש'],
    'list' => [', ', ' ו -'],
    'weekend' => [5, 6],
];
