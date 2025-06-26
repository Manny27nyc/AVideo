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
 * - Josh Soref
 * - Kaushik Thanki
 * - Josh Soref
 */
return [
    'year' => 'એક વર્ષ|:count વર્ષ',
    'y' => ':countવર્ષ|:countવર્ષો',
    'month' => 'એક મહિનો|:count મહિના',
    'm' => ':countમહિનો|:countમહિના',
    'week' => ':count અઠવાડિયું|:count અઠવાડિયા',
    'w' => ':countઅઠ.|:countઅઠ.',
    'day' => 'એક દિવસ|:count દિવસ',
    'd' => ':countદિ.|:countદિ.',
    'hour' => 'એક કલાક|:count કલાક',
    'h' => ':countક.|:countક.',
    'minute' => 'એક મિનિટ|:count મિનિટ',
    'min' => ':countમિ.|:countમિ.',
    'second' => 'અમુક પળો|:count સેકંડ',
    's' => ':countસે.|:countસે.',
    'ago' => ':time પેહલા',
    'from_now' => ':time મા',
    'after' => ':time પછી',
    'before' => ':time પહેલા',
    'diff_now' => 'હમણાં',
    'diff_today' => 'આજ',
    'diff_yesterday' => 'ગઇકાલે',
    'diff_tomorrow' => 'કાલે',
    'formats' => [
        'LT' => 'A h:mm વાગ્યે',
        'LTS' => 'A h:mm:ss વાગ્યે',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY, A h:mm વાગ્યે',
        'LLLL' => 'dddd, D MMMM YYYY, A h:mm વાગ્યે',
    ],
    'calendar' => [
        'sameDay' => '[આજ] LT',
        'nextDay' => '[કાલે] LT',
        'nextWeek' => 'dddd, LT',
        'lastDay' => '[ગઇકાલે] LT',
        'lastWeek' => '[પાછલા] dddd, LT',
        'sameElse' => 'L',
    ],
    'meridiem' => function ($hour) {
        if ($hour < 4) {
            return 'રાત';
        }
        if ($hour < 10) {
            return 'સવાર';
        }
        if ($hour < 17) {
            return 'બપોર';
        }
        if ($hour < 20) {
            return 'સાંજ';
        }

        return 'રાત';
    },
    'months' => ['જાન્યુઆરી', 'ફેબ્રુઆરી', 'માર્ચ', 'એપ્રિલ', 'મે', 'જૂન', 'જુલાઈ', 'ઑગસ્ટ', 'સપ્ટેમ્બર', 'ઑક્ટ્બર', 'નવેમ્બર', 'ડિસેમ્બર'],
    'months_short' => ['જાન્યુ.', 'ફેબ્રુ.', 'માર્ચ', 'એપ્રિ.', 'મે', 'જૂન', 'જુલા.', 'ઑગ.', 'સપ્ટે.', 'ઑક્ટ્.', 'નવે.', 'ડિસે.'],
    'weekdays' => ['રવિવાર', 'સોમવાર', 'મંગળવાર', 'બુધ્વાર', 'ગુરુવાર', 'શુક્રવાર', 'શનિવાર'],
    'weekdays_short' => ['રવિ', 'સોમ', 'મંગળ', 'બુધ્', 'ગુરુ', 'શુક્ર', 'શનિ'],
    'weekdays_min' => ['ર', 'સો', 'મં', 'બુ', 'ગુ', 'શુ', 'શ'],
    'list' => [', ', ' અને '],
    'first_day_of_week' => 0,
    'day_of_first_week_of_year' => 1,
    'weekend' => [0, 0],
];
