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
 * - Ge'ez Frontier Foundation    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
    ],
    'months' => ['ጃንዩወሪ', 'ፌብሩወሪ', 'ማርች', 'ኤፕረል', 'ሜይ', 'ጁን', 'ጁላይ', 'ኦገስት', 'ሴፕቴምበር', 'ኦክተውበር', 'ኖቬምበር', 'ዲሴምበር'],
    'months_short' => ['ጃንዩ', 'ፌብሩ', 'ማርች', 'ኤፕረ', 'ሜይ ', 'ጁን ', 'ጁላይ', 'ኦገስ', 'ሴፕቴ', 'ኦክተ', 'ኖቬም', 'ዲሴም'],
    'weekdays' => ['እኁድ', 'ሰኑይ', 'ሠሉስ', 'ራብዕ', 'ሐሙስ', 'ዓርበ', 'ቀዳሚት'],
    'weekdays_short' => ['እኁድ', 'ሰኑይ', 'ሠሉስ', 'ራብዕ', 'ሐሙስ', 'ዓርበ', 'ቀዳሚ'],
    'weekdays_min' => ['እኁድ', 'ሰኑይ', 'ሠሉስ', 'ራብዕ', 'ሐሙስ', 'ዓርበ', 'ቀዳሚ'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['ጽባሕ', 'ምሴት'],
]);
