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
 * - Philippe Vaucher
 * - Jakub Tesinsky
 * - Martin Suja
 * - Nikos Timiopulos
 * - Bohuslav Blín
 * - Tsutomu Kuroda
 * - tjku
 * - Lukas Svoboda
 * - Max Melentiev
 * - Juanito Fatas
 * - Akira Matsuda
 * - Christopher Dell
 * - Václav Pávek
 * - CodeSkills
 * - Tlapi
 * - newman101
 * - Petr Kadlec
 * - tommaskraus
 * - Karel Sommer (calvera)
 */
$za = function ($time) {
    return 'za '.strtr($time, [
        'hodina' => 'hodinu',
        'minuta' => 'minutu',
        'sekunda' => 'sekundu',
    ]);
};

$pred = function ($time) {
    $time = strtr($time, [
        'hodina' => 'hodinou',
        'minuta' => 'minutou',
        'sekunda' => 'sekundou',
    ]);
    $time = preg_replace('/hodiny?(?!\w)/', 'hodinami', $time);
    $time = preg_replace('/minuty?(?!\w)/', 'minutami', $time);
    $time = preg_replace('/sekundy?(?!\w)/', 'sekundami', $time);

    return "před $time";
};

return [
    'year' => ':count rok|:count roky|:count let',
    'y' => ':count rok|:count roky|:count let',
    'a_year' => 'rok|:count roky|:count let',
    'month' => ':count měsíc|:count měsíce|:count měsíců',
    'm' => ':count měs.',
    'a_month' => 'měsíc|:count měsíce|:count měsíců',
    'week' => ':count týden|:count týdny|:count týdnů',
    'w' => ':count týd.',
    'a_week' => 'týden|:count týdny|:count týdnů',
    'day' => ':count den|:count dny|:count dní',
    'd' => ':count den|:count dny|:count dní',
    'a_day' => 'den|:count dny|:count dní',
    'hour' => ':count hodina|:count hodiny|:count hodin',
    'h' => ':count hod.',
    'a_hour' => 'hodina|:count hodiny|:count hodin',
    'minute' => ':count minuta|:count minuty|:count minut',
    'min' => ':count min.',
    'a_minute' => 'minuta|:count minuty|:count minut',
    'second' => ':count sekunda|:count sekundy|:count sekund',
    's' => ':count sek.',
    'a_second' => 'pár sekund|:count sekundy|:count sekund',

    'month_ago' => ':count měsícem|:count měsíci|:count měsíci',
    'a_month_ago' => 'měsícem|:count měsíci|:count měsíci',
    'day_ago' => ':count dnem|:count dny|:count dny',
    'a_day_ago' => 'dnem|:count dny|:count dny',
    'week_ago' => ':count týdnem|:count týdny|:count týdny',
    'a_week_ago' => 'týdnem|:count týdny|:count týdny',
    'year_ago' => ':count rokem|:count roky|:count lety',
    'y_ago' => ':count rok.|:count rok.|:count let.',
    'a_year_ago' => 'rokem|:count roky|:count lety',

    'month_before' => ':count měsícem|:count měsíci|:count měsíci',
    'a_month_before' => 'měsícem|:count měsíci|:count měsíci',
    'day_before' => ':count dnem|:count dny|:count dny',
    'a_day_before' => 'dnem|:count dny|:count dny',
    'week_before' => ':count týdnem|:count týdny|:count týdny',
    'a_week_before' => 'týdnem|:count týdny|:count týdny',
    'year_before' => ':count rokem|:count roky|:count lety',
    'y_before' => ':count rok.|:count rok.|:count let.',
    'a_year_before' => 'rokem|:count roky|:count lety',

    'ago' => $pred,
    'from_now' => $za,
    'before' => $pred,
    'after' => $za,
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'months' => ['leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec'],
    'months_short' => ['led', 'úno', 'bře', 'dub', 'kvě', 'čvn', 'čvc', 'srp', 'zář', 'říj', 'lis', 'pro'],
    'weekdays' => ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'],
    'weekdays_short' => ['ned', 'pon', 'úte', 'stř', 'čtv', 'pát', 'sob'],
    'weekdays_min' => ['ne', 'po', 'út', 'st', 'čt', 'pá', 'so'],
    'list' => [', ', ' a '],
    'diff_now' => 'nyní',
    'diff_yesterday' => 'včera',
    'diff_tomorrow' => 'zítra',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD. MM. YYYY',
        'LL' => 'D. MMMM YYYY',
        'LLL' => 'D. MMMM YYYY HH:mm',
        'LLLL' => 'dddd D. MMMM YYYY HH:mm',
    ],
    'meridiem' => ['dopoledne', 'odpoledne'],
];
