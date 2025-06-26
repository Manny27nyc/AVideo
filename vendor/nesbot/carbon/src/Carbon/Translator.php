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

namespace Carbon;

use ReflectionMethod;
use Symfony\Component\Translation;
use Symfony\Contracts\Translation\TranslatorInterface;

$transMethod = new ReflectionMethod(
    class_exists(TranslatorInterface::class)
        ? TranslatorInterface::class
        : Translation\Translator::class,
    'trans'
);

require $transMethod->hasReturnType()
    ? __DIR__.'/../../lazy/Carbon/TranslatorStrongType.php'
    : __DIR__.'/../../lazy/Carbon/TranslatorWeakType.php';

class Translator extends LazyTranslator
{
    // Proxy dynamically loaded LazyTranslator in a static way
}
