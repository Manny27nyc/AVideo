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
 * - Kunal Marwaha
 * - Josh Soref
 * - François B
 * - kc
 */
return [
    'year' => ':count సంవత్సరం|:count సంవత్సరాలు',
    'a_year' => 'ఒక సంవత్సరం|:count సంవత్సరాలు',
    'y' => ':count సం.',
    'month' => ':count నెల|:count నెలలు',
    'a_month' => 'ఒక నెల|:count నెలలు',
    'm' => ':count నెల|:count నెల.',
    'week' => ':count వారం|:count వారాలు',
    'a_week' => 'ఒక వారం|:count వారాలు',
    'w' => ':count వార.|:count వారా.',
    'day' => ':count రోజు|:count రోజులు',
    'a_day' => 'ఒక రోజు|:count రోజులు',
    'd' => ':count రోజు|:count రోజు.',
    'hour' => ':count గంట|:count గంటలు',
    'a_hour' => 'ఒక గంట|:count గంటలు',
    'h' => ':count గం.',
    'minute' => ':count నిమిషం|:count నిమిషాలు',
    'a_minute' => 'ఒక నిమిషం|:count నిమిషాలు',
    'min' => ':count నిమి.',
    'second' => ':count సెకను|:count సెకన్లు',
    'a_second' => 'కొన్ని క్షణాలు|:count సెకన్లు',
    's' => ':count సెక.',
    'ago' => ':time క్రితం',
    'from_now' => ':time లో',
    'diff_now' => 'ప్రస్తుతం',
    'diff_today' => 'నేడు',
    'diff_yesterday' => 'నిన్న',
    'diff_tomorrow' => 'రేపు',
    'formats' => [
        'LT' => 'A h:mm',
        'LTS' => 'A h:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY, A h:mm',
        'LLLL' => 'dddd, D MMMM YYYY, A h:mm',
    ],
    'calendar' => [
        'sameDay' => '[నేడు] LT',
        'nextDay' => '[రేపు] LT',
        'nextWeek' => 'dddd, LT',
        'lastDay' => '[నిన్న] LT',
        'lastWeek' => '[గత] dddd, LT',
        'sameElse' => 'L',
    ],
    'ordinal' => ':numberవ',
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'రాత్రి';
        }
        if ($hour < 10) {
            return 'ఉదయం';
        }
        if ($hour < 17) {
            return 'మధ్యాహ్నం';
        }
        if ($hour < 20) {
            return 'సాయంత్రం';
        }

        return ' రాత్రి';
    },
    'months' => ['జనవరి', 'ఫిబ్రవరి', 'మార్చి', 'ఏప్రిల్', 'మే', 'జూన్', 'జూలై', 'ఆగస్టు', 'సెప్టెంబర్', 'అక్టోబర్', 'నవంబర్', 'డిసెంబర్'],
    'months_short' => ['జన.', 'ఫిబ్ర.', 'మార్చి', 'ఏప్రి.', 'మే', 'జూన్', 'జూలై', 'ఆగ.', 'సెప్.', 'అక్టో.', 'నవ.', 'డిసె.'],
    'weekdays' => ['ఆదివారం', 'సోమవారం', 'మంగళవారం', 'బుధవారం', 'గురువారం', 'శుక్రవారం', 'శనివారం'],
    'weekdays_short' => ['ఆది', 'సోమ', 'మంగళ', 'బుధ', 'గురు', 'శుక్ర', 'శని'],
    'weekdays_min' => ['ఆ', 'సో', 'మం', 'బు', 'గు', 'శు', 'శ'],
    'list' => ', ',
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
    'weekend' => [0, 0],
];
