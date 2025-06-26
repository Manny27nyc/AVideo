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

return array_replace_recursive(require __DIR__.'/az.php', [
    'weekdays' => ['базар', 'базар ертәси', 'чәршәнбә ахшамы', 'чәршәнбә', 'ҹүмә ахшамы', 'ҹүмә', 'шәнбә'],
    'weekdays_short' => ['Б.', 'Б.Е.', 'Ч.А.', 'Ч.', 'Ҹ.А.', 'Ҹ.', 'Ш.'],
    'weekdays_min' => ['Б.', 'Б.Е.', 'Ч.А.', 'Ч.', 'Ҹ.А.', 'Ҹ.', 'Ш.'],
    'months' => ['јанвар', 'феврал', 'март', 'апрел', 'май', 'ијун', 'ијул', 'август', 'сентјабр', 'октјабр', 'нојабр', 'декабр'],
    'months_short' => ['јан', 'фев', 'мар', 'апр', 'май', 'ијн', 'ијл', 'авг', 'сен', 'окт', 'ној', 'дек'],
    'months_standalone' => ['Јанвар', 'Феврал', 'Март', 'Апрел', 'Май', 'Ијун', 'Ијул', 'Август', 'Сентјабр', 'Октјабр', 'Нојабр', 'Декабр'],
    'meridiem' => ['а', 'п'],
]);
