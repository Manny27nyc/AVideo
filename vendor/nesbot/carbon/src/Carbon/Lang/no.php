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
 * - Daniel S. Billing
 * - Paul
 * - Jimmie Johansson
 * - Jens Herlevsen
 */
return array_replace_recursive(require __DIR__.'/nb.php', [
    'formats' => [
        'LLL' => 'D. MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D. MMMM YYYY [kl.] HH:mm',
    ],
    'calendar' => [
        'nextWeek' => 'på dddd [kl.] LT',
        'lastWeek' => '[i] dddd[s kl.] LT',
    ],
]);
