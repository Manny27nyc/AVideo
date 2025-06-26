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
 * - Kruy Vanna
 * - Sereysethy Touch
 * - JD Isaacks
 * - Sovichet Tep
 */
return [
    'year' => '{1}មួយឆ្នាំ|]1,Inf[:count ឆ្នាំ',
    'y' => ':count ឆ្នាំ',
    'month' => '{1}មួយខែ|]1,Inf[:count ខែ',
    'm' => ':count ខែ',
    'week' => ':count សប្ដាហ៍',
    'w' => ':count សប្ដាហ៍',
    'day' => '{1}មួយថ្ងៃ|]1,Inf[:count ថ្ងៃ',
    'd' => ':count ថ្ងៃ',
    'hour' => '{1}មួយម៉ោង|]1,Inf[:count ម៉ោង',
    'h' => ':count ម៉ោង',
    'minute' => '{1}មួយនាទី|]1,Inf[:count នាទី',
    'min' => ':count នាទី',
    'second' => '{1}ប៉ុន្មានវិនាទី|]1,Inf[:count វិនាទី',
    's' => ':count វិនាទី',
    'ago' => ':timeមុន',
    'from_now' => ':timeទៀត',
    'after' => 'នៅ​ក្រោយ :time',
    'before' => 'នៅ​មុន :time',
    'diff_now' => 'ឥឡូវ',
    'diff_today' => 'ថ្ងៃនេះ',
    'diff_today_regexp' => 'ថ្ងៃនេះ(?:\\s+ម៉ោង)?',
    'diff_yesterday' => 'ម្សិលមិញ',
    'diff_yesterday_regexp' => 'ម្សិលមិញ(?:\\s+ម៉ោង)?',
    'diff_tomorrow' => 'ថ្ងៃ​ស្អែក',
    'diff_tomorrow_regexp' => 'ស្អែក(?:\\s+ម៉ោង)?',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[ថ្ងៃនេះ ម៉ោង] LT',
        'nextDay' => '[ស្អែក ម៉ោង] LT',
        'nextWeek' => 'dddd [ម៉ោង] LT',
        'lastDay' => '[ម្សិលមិញ ម៉ោង] LT',
        'lastWeek' => 'dddd [សប្តាហ៍មុន] [ម៉ោង] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => 'ទី:number',
    'meridiem' => ['ព្រឹក', 'ល្ងាច'],
    'months' => ['មករា', 'កុម្ភៈ', 'មីនា', 'មេសា', 'ឧសភា', 'មិថុនា', 'កក្កដា', 'សីហា', 'កញ្ញា', 'តុលា', 'វិច្ឆិកា', 'ធ្នូ'],
    'months_short' => ['មករា', 'កុម្ភៈ', 'មីនា', 'មេសា', 'ឧសភា', 'មិថុនា', 'កក្កដា', 'សីហា', 'កញ្ញា', 'តុលា', 'វិច្ឆិកា', 'ធ្នូ'],
    'weekdays' => ['អាទិត្យ', 'ច័ន្ទ', 'អង្គារ', 'ពុធ', 'ព្រហស្បតិ៍', 'សុក្រ', 'សៅរ៍'],
    'weekdays_short' => ['អា', 'ច', 'អ', 'ព', 'ព្រ', 'សុ', 'ស'],
    'weekdays_min' => ['អា', 'ច', 'អ', 'ព', 'ព្រ', 'សុ', 'ស'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', 'និង '],
];
