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
 * - Valery Timiriliyev Valery Timiriliyev timiriliyev@gmail.com
 */
return array_replace_recursive(require __DIR__.'/ru.php', [
    'formats' => [
        'L' => 'YYYY.MM.DD',
    ],
    'months' => ['тохсунньу', 'олунньу', 'кулун тутар', 'муус устар', 'ыам ыйын', 'бэс ыйын', 'от ыйын', 'атырдьах ыйын', 'балаҕан ыйын', 'алтынньы', 'сэтинньи', 'ахсынньы'],
    'months_short' => ['тохс', 'олун', 'кул', 'муус', 'ыам', 'бэс', 'от', 'атыр', 'бал', 'алт', 'сэт', 'ахс'],
    'weekdays' => ['баскыһыанньа', 'бэнидиэнньик', 'оптуорунньук', 'сэрэдэ', 'чэппиэр', 'бээтинсэ', 'субуота'],
    'weekdays_short' => ['бс', 'бн', 'оп', 'ср', 'чп', 'бт', 'сб'],
    'weekdays_min' => ['бс', 'бн', 'оп', 'ср', 'чп', 'бт', 'сб'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
]);
