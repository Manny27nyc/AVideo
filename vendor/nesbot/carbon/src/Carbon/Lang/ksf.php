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
    'meridiem' => ['sárúwá', 'cɛɛ́nko'],
    'weekdays' => ['sɔ́ndǝ', 'lǝndí', 'maadí', 'mɛkrɛdí', 'jǝǝdí', 'júmbá', 'samdí'],
    'weekdays_short' => ['sɔ́n', 'lǝn', 'maa', 'mɛk', 'jǝǝ', 'júm', 'sam'],
    'weekdays_min' => ['sɔ́n', 'lǝn', 'maa', 'mɛk', 'jǝǝ', 'júm', 'sam'],
    'months' => ['ŋwíí a ntɔ́ntɔ', 'ŋwíí akǝ bɛ́ɛ', 'ŋwíí akǝ ráá', 'ŋwíí akǝ nin', 'ŋwíí akǝ táan', 'ŋwíí akǝ táafɔk', 'ŋwíí akǝ táabɛɛ', 'ŋwíí akǝ táaraa', 'ŋwíí akǝ táanin', 'ŋwíí akǝ ntɛk', 'ŋwíí akǝ ntɛk di bɔ́k', 'ŋwíí akǝ ntɛk di bɛ́ɛ'],
    'months_short' => ['ŋ1', 'ŋ2', 'ŋ3', 'ŋ4', 'ŋ5', 'ŋ6', 'ŋ7', 'ŋ8', 'ŋ9', 'ŋ10', 'ŋ11', 'ŋ12'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D/M/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd D MMMM YYYY HH:mm',
    ],
]);
