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
 * - Ubuntu René Manassé GALEKWA renemanasse@gmail.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D/M/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
    'months' => ['sánzá ya yambo', 'sánzá ya míbalé', 'sánzá ya mísáto', 'sánzá ya mínei', 'sánzá ya mítáno', 'sánzá ya motóbá', 'sánzá ya nsambo', 'sánzá ya mwambe', 'sánzá ya libwa', 'sánzá ya zómi', 'sánzá ya zómi na mɔ̌kɔ́', 'sánzá ya zómi na míbalé'],
    'months_short' => ['yan', 'fbl', 'msi', 'apl', 'mai', 'yun', 'yul', 'agt', 'stb', 'ɔtb', 'nvb', 'dsb'],
    'weekdays' => ['Lomíngo', 'Mosálá mɔ̌kɔ́', 'Misálá míbalé', 'Misálá mísáto', 'Misálá mínei', 'Misálá mítáno', 'Mpɔ́sɔ'],
    'weekdays_short' => ['m1.', 'm2.', 'm3.', 'm4.', 'm5.', 'm6.', 'm7.'],
    'weekdays_min' => ['m1.', 'm2.', 'm3.', 'm4.', 'm5.', 'm6.', 'm7.'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,

    'year' => 'mbula :count',
    'y' => 'mbula :count',
    'a_year' => 'mbula :count',

    'month' => 'sánzá :count',
    'm' => 'sánzá :count',
    'a_month' => 'sánzá :count',

    'week' => 'mpɔ́sɔ :count',
    'w' => 'mpɔ́sɔ :count',
    'a_week' => 'mpɔ́sɔ :count',

    'day' => 'mokɔlɔ :count',
    'd' => 'mokɔlɔ :count',
    'a_day' => 'mokɔlɔ :count',

    'hour' => 'ngonga :count',
    'h' => 'ngonga :count',
    'a_hour' => 'ngonga :count',

    'minute' => 'miniti :count',
    'min' => 'miniti :count',
    'a_minute' => 'miniti :count',

    'second' => 'segɔnde :count',
    's' => 'segɔnde :count',
    'a_second' => 'segɔnde :count',
]);
