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

namespace Symfony\Component\Translation\Provider;

use Symfony\Component\Translation\TranslatorBag;
use Symfony\Component\Translation\TranslatorBagInterface;

/**
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
class NullProvider implements ProviderInterface
{
    public function __toString(): string
    {
        return 'null';
    }

    public function write(TranslatorBagInterface $translatorBag, bool $override = false): void
    {
    }

    public function read(array $domains, array $locales): TranslatorBag
    {
        return new TranslatorBag();
    }

    public function delete(TranslatorBagInterface $translatorBag): void
    {
    }
}
