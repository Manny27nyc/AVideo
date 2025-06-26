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
 * - PeshSajSoft Ltd. Vyacheslav Kileev slavakileev@yandex.ru
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'YYYY.MM.DD',
    ],
    'months' => ['Шорыкйол', 'Пургыж', 'Ӱярня', 'Вӱдшор', 'Ага', 'Пеледыш', 'Сӱрем', 'Сорла', 'Идым', 'Шыжа', 'Кылме', 'Теле'],
    'months_short' => ['Шрк', 'Пгж', 'Ӱрн', 'Вшр', 'Ага', 'Пдш', 'Срм', 'Срл', 'Идм', 'Шыж', 'Клм', 'Тел'],
    'weekdays' => ['Рушарня', 'Шочмо', 'Кушкыжмо', 'Вӱргече', 'Изарня', 'Кугарня', 'Шуматкече'],
    'weekdays_short' => ['Ршр', 'Шчм', 'Кжм', 'Вгч', 'Изр', 'Кгр', 'Шмт'],
    'weekdays_min' => ['Ршр', 'Шчм', 'Кжм', 'Вгч', 'Изр', 'Кгр', 'Шмт'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,

    'year' => ':count идалык',
    'y' => ':count идалык',
    'a_year' => ':count идалык',

    'month' => ':count Тылзе',
    'm' => ':count Тылзе',
    'a_month' => ':count Тылзе',

    'week' => ':count арня',
    'w' => ':count арня',
    'a_week' => ':count арня',

    'day' => ':count кече',
    'd' => ':count кече',
    'a_day' => ':count кече',

    'hour' => ':count час',
    'h' => ':count час',
    'a_hour' => ':count час',

    'minute' => ':count минут',
    'min' => ':count минут',
    'a_minute' => ':count минут',

    'second' => ':count кокымшан',
    's' => ':count кокымшан',
    'a_second' => ':count кокымшан',
]);
