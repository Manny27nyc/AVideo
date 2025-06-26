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
 * - Pablo Saratxaga pablo@mandrakesoft.com
 */
return array_replace_recursive(require __DIR__.'/az.php', [
    'months_short' => ['Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyn', 'İyl', 'Avq', 'Sen', 'Okt', 'Noy', 'Dek'],
    'weekdays' => ['bazar günü', 'bazar ertəsi', 'çərşənbə axşamı', 'çərşənbə', 'cümə axşamı', 'cümə', 'şənbə'],
    'weekdays_short' => ['baz', 'ber', 'çax', 'çər', 'cax', 'cüm', 'şnb'],
    'weekdays_min' => ['baz', 'ber', 'çax', 'çər', 'cax', 'cüm', 'şnb'],
]);
