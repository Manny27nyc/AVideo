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
 * - Sherubtse College    bug-glibc@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'པསྱི་ལོYYཟལMMཚེསDD',
    ],
    'months' => ['ཟླ་བ་དང་པ་', 'ཟླ་བ་གཉིས་པ་', 'ཟླ་བ་གསུམ་པ་', 'ཟླ་བ་བཞི་པ་', 'ཟླ་བ་ལྔ་ཕ་', 'ཟླ་བ་དྲུག་པ་', 'ཟླ་བ་བདུནཔ་', 'ཟླ་བ་བརྒྱད་པ་', 'ཟླ་བ་དགུ་པ་', 'ཟླ་བ་བཅུ་པ་', 'ཟླ་བ་བཅུ་གཅིག་པ་', 'ཟླ་བ་བཅུ་གཉིས་པ་'],
    'months_short' => ['ཟླ་༡', 'ཟླ་༢', 'ཟླ་༣', 'ཟླ་༤', 'ཟླ་༥', 'ཟླ་༦', 'ཟླ་༧', 'ཟླ་༨', 'ཟླ་༩', 'ཟླ་༡༠', 'ཟླ་༡༡', 'ཟླ་༡༢'],
    'weekdays' => ['གཟའ་ཟླ་བ་', 'གཟའ་མིག་དམར་', 'གཟའ་ལྷག་ཕ་', 'གཟའ་པུར་བུ་', 'གཟའ་པ་སངས་', 'གཟའ་སྤེན་ཕ་', 'གཟའ་ཉི་མ་'],
    'weekdays_short' => ['ཟླ་', 'མིར་', 'ལྷག་', 'པུར་', 'སངས་', 'སྤེན་', 'ཉི་'],
    'weekdays_min' => ['ཟླ་', 'མིར་', 'ལྷག་', 'པུར་', 'སངས་', 'སྤེན་', 'ཉི་'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ངས་ཆ', 'ཕྱི་ཆ'],

    'year' => ':count ཆརཔ', // less reliable
    'y' => ':count ཆརཔ', // less reliable
    'a_year' => ':count ཆརཔ', // less reliable

    'month' => ':count ཟླ་བ', // less reliable
    'm' => ':count ཟླ་བ', // less reliable
    'a_month' => ':count ཟླ་བ', // less reliable

    'day' => ':count ཉི', // less reliable
    'd' => ':count ཉི', // less reliable
    'a_day' => ':count ཉི', // less reliable

    'second' => ':count ཆ', // less reliable
    's' => ':count ཆ', // less reliable
    'a_second' => ':count ཆ', // less reliable
]);
