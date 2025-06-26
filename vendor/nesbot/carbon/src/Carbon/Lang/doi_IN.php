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
 * - Red Hat Pune    libc-alpha@sourceware.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['जनवरी', 'फरवरी', 'मार्च', 'एप्रैल', 'मेई', 'जून', 'जूलै', 'अगस्त', 'सितंबर', 'अक्तूबर', 'नवंबर', 'दिसंबर'],
    'months_short' => ['जनवरी', 'फरवरी', 'मार्च', 'एप्रैल', 'मेई', 'जून', 'जूलै', 'अगस्त', 'सितंबर', 'अक्तूबर', 'नवंबर', 'दिसंबर'],
    'weekdays' => ['ऐतबार', 'सोमबार', 'मंगलबर', 'बुधबार', 'बीरबार', 'शुक्करबार', 'श्नीचरबार'],
    'weekdays_short' => ['ऐत', 'सोम', 'मंगल', 'बुध', 'बीर', 'शुक्कर', 'श्नीचर'],
    'weekdays_min' => ['ऐत', 'सोम', 'मंगल', 'बुध', 'बीर', 'शुक्कर', 'श्नीचर'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['सञं', 'सबेर'],

    'second' => ':count सङार', // less reliable
    's' => ':count सङार', // less reliable
    'a_second' => ':count सङार', // less reliable
]);
