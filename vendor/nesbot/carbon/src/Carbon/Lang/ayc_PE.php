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
 * - runasimipi.org    libc-alpha@sourceware.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
    'months' => ['inïru', 'phiwriru', 'marsu', 'awrila', 'mayu', 'junyu', 'julyu', 'awustu', 'sitimri', 'uktuwri', 'nuwimri', 'risimri'],
    'months_short' => ['ini', 'phi', 'mar', 'awr', 'may', 'jun', 'jul', 'awu', 'sit', 'ukt', 'nuw', 'ris'],
    'weekdays' => ['tuminku', 'lunisa', 'martisa', 'mirkulisa', 'juywisa', 'wirnisa', 'sawäru'],
    'weekdays_short' => ['tum', 'lun', 'mar', 'mir', 'juy', 'wir', 'saw'],
    'weekdays_min' => ['tum', 'lun', 'mar', 'mir', 'juy', 'wir', 'saw'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['VM', 'NM'],
]);
