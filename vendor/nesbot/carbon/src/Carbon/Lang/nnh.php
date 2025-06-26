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

return array_replace_recursive(require __DIR__.'/en.php', [
    'meridiem' => ['mbaʼámbaʼ', 'ncwònzém'],
    'weekdays' => null,
    'weekdays_short' => ['lyɛʼɛ́ sẅíŋtè', 'mvfò lyɛ̌ʼ', 'mbɔ́ɔntè mvfò lyɛ̌ʼ', 'tsètsɛ̀ɛ lyɛ̌ʼ', 'mbɔ́ɔntè tsetsɛ̀ɛ lyɛ̌ʼ', 'mvfò màga lyɛ̌ʼ', 'màga lyɛ̌ʼ'],
    'weekdays_min' => null,
    'months' => null,
    'months_short' => ['saŋ tsetsɛ̀ɛ lùm', 'saŋ kàg ngwóŋ', 'saŋ lepyè shúm', 'saŋ cÿó', 'saŋ tsɛ̀ɛ cÿó', 'saŋ njÿoláʼ', 'saŋ tyɛ̀b tyɛ̀b mbʉ̀ŋ', 'saŋ mbʉ̀ŋ', 'saŋ ngwɔ̀ʼ mbÿɛ', 'saŋ tàŋa tsetsáʼ', 'saŋ mejwoŋó', 'saŋ lùm'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/yy',
        'LL' => 'D MMM, YYYY',
        'LLL' => '[lyɛ]̌ʼ d [na] MMMM, YYYY HH:mm',
        'LLLL' => 'dddd , [lyɛ]̌ʼ d [na] MMMM, YYYY HH:mm',
    ],
]);
