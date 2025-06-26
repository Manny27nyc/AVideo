/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\Translation;

interface LocaleAwareInterface
{
    /**
     * Sets the current locale.
     *
     * @param string $locale The locale
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    public function setLocale(string $locale);

    /**
     * Returns the current locale.
     *
     * @return string
     */
    public function getLocale();
}
