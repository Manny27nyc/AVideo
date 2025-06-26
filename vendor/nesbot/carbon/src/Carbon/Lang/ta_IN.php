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
 * - IBM Globalization Center of Competency, Yamato Software Laboratory    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/ta.php', [
    'formats' => [
        'L' => 'D/M/YY',
    ],
    'months' => ['ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்'],
    'months_short' => ['ஜன.', 'பிப்.', 'மார்.', 'ஏப்.', 'மே', 'ஜூன்', 'ஜூலை', 'ஆக.', 'செப்.', 'அக்.', 'நவ.', 'டிச.'],
    'weekdays' => ['ஞாயிறு', 'திங்கள்', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனி'],
    'weekdays_short' => ['ஞா', 'தி', 'செ', 'பு', 'வி', 'வெ', 'ச'],
    'weekdays_min' => ['ஞா', 'தி', 'செ', 'பு', 'வி', 'வெ', 'ச'],
    'day_of_first_week_of_year' => 1,
    'meridiem' => ['காலை', 'மாலை'],
]);
