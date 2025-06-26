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
 * - pablo@mandriva.com
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
    'months' => ['Siqiññaatchiaq', 'Siqiññaasrugruk', 'Paniqsiqsiivik', 'Qilġich Tatqiat', 'Suppivik', 'Iġñivik', 'Itchavik', 'Tiññivik', 'Amiġaiqsivik', 'Sikkuvik', 'Nippivik', 'Siqiñġiḷaq'],
    'months_short' => ['Sñt', 'Sñs', 'Pan', 'Qil', 'Sup', 'Iġñ', 'Itc', 'Tiñ', 'Ami', 'Sik', 'Nip', 'Siq'],
    'weekdays' => ['Minġuiqsioiq', 'Savałłiq', 'Ilaqtchiioiq', 'Qitchiioiq', 'Sisamiioiq', 'Tallimmiioiq', 'Maqinġuoiq'],
    'weekdays_short' => ['Min', 'Sav', 'Ila', 'Qit', 'Sis', 'Tal', 'Maq'],
    'weekdays_min' => ['Min', 'Sav', 'Ila', 'Qit', 'Sis', 'Tal', 'Maq'],
    'day_of_first_week_of_year' => 1,

    'year' => ':count ukiuq',
    'y' => ':count ukiuq',
    'a_year' => ':count ukiuq',

    'month' => ':count Tatqiat',
    'm' => ':count Tatqiat',
    'a_month' => ':count Tatqiat',

    'week' => ':count tatqiat', // less reliable
    'w' => ':count tatqiat', // less reliable
    'a_week' => ':count tatqiat', // less reliable

    'day' => ':count siqiñiq', // less reliable
    'd' => ':count siqiñiq', // less reliable
    'a_day' => ':count siqiñiq', // less reliable

    'hour' => ':count Siḷa', // less reliable
    'h' => ':count Siḷa', // less reliable
    'a_hour' => ':count Siḷa', // less reliable

    'second' => ':count iġñiq', // less reliable
    's' => ':count iġñiq', // less reliable
    'a_second' => ':count iġñiq', // less reliable
]);
