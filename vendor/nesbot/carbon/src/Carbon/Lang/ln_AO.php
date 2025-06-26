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

return array_replace_recursive(require __DIR__.'/ln.php', [
    'weekdays' => ['eyenga', 'mokɔlɔ mwa yambo', 'mokɔlɔ mwa míbalé', 'mokɔlɔ mwa mísáto', 'mokɔlɔ ya mínéi', 'mokɔlɔ ya mítáno', 'mpɔ́sɔ'],
    'weekdays_short' => ['eye', 'ybo', 'mbl', 'mst', 'min', 'mtn', 'mps'],
    'weekdays_min' => ['eye', 'ybo', 'mbl', 'mst', 'min', 'mtn', 'mps'],
    'meridiem' => ['ntɔ́ngɔ́', 'mpókwa'],
]);
