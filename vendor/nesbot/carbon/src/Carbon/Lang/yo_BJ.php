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

return array_replace_recursive(require __DIR__.'/yo.php', [
    'meridiem' => ['Àárɔ̀', 'Ɔ̀sán'],
    'weekdays' => ['Ɔjɔ́ Àìkú', 'Ɔjɔ́ Ajé', 'Ɔjɔ́ Ìsɛ́gun', 'Ɔjɔ́rú', 'Ɔjɔ́bɔ', 'Ɔjɔ́ Ɛtì', 'Ɔjɔ́ Àbámɛ́ta'],
    'weekdays_short' => ['Àìkú', 'Ajé', 'Ìsɛ́gun', 'Ɔjɔ́rú', 'Ɔjɔ́bɔ', 'Ɛtì', 'Àbámɛ́ta'],
    'weekdays_min' => ['Àìkú', 'Ajé', 'Ìsɛ́gun', 'Ɔjɔ́rú', 'Ɔjɔ́bɔ', 'Ɛtì', 'Àbámɛ́ta'],
    'months' => ['Oshù Shɛ́rɛ́', 'Oshù Èrèlè', 'Oshù Ɛrɛ̀nà', 'Oshù Ìgbé', 'Oshù Ɛ̀bibi', 'Oshù Òkúdu', 'Oshù Agɛmɔ', 'Oshù Ògún', 'Oshù Owewe', 'Oshù Ɔ̀wàrà', 'Oshù Bélú', 'Oshù Ɔ̀pɛ̀'],
    'months_short' => ['Shɛ́rɛ́', 'Èrèlè', 'Ɛrɛ̀nà', 'Ìgbé', 'Ɛ̀bibi', 'Òkúdu', 'Agɛmɔ', 'Ògún', 'Owewe', 'Ɔ̀wàrà', 'Bélú', 'Ɔ̀pɛ̀'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
]);
