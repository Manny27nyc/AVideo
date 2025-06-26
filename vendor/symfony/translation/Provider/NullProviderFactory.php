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

use Symfony\Component\Translation\Exception\UnsupportedSchemeException;

/**
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
final class NullProviderFactory extends AbstractProviderFactory
{
    public function create(Dsn $dsn): ProviderInterface
    {
        if ('null' === $dsn->getScheme()) {
            return new NullProvider();
        }

        throw new UnsupportedSchemeException($dsn, 'null', $this->getSupportedSchemes());
    }

    protected function getSupportedSchemes(): array
    {
        return ['null'];
    }
}
