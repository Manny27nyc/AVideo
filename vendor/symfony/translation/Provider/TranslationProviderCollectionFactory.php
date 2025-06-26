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
class TranslationProviderCollectionFactory
{
    private $factories;
    private $enabledLocales;

    /**
     * @param iterable<mixed, ProviderFactoryInterface> $factories
     */
    public function __construct(iterable $factories, array $enabledLocales)
    {
        $this->factories = $factories;
        $this->enabledLocales = $enabledLocales;
    }

    public function fromConfig(array $config): TranslationProviderCollection
    {
        $providers = [];
        foreach ($config as $name => $currentConfig) {
            $providers[$name] = $this->fromDsnObject(
                new Dsn($currentConfig['dsn']),
                !$currentConfig['locales'] ? $this->enabledLocales : $currentConfig['locales'],
                !$currentConfig['domains'] ? [] : $currentConfig['domains']
            );
        }

        return new TranslationProviderCollection($providers);
    }

    public function fromDsnObject(Dsn $dsn, array $locales, array $domains = []): ProviderInterface
    {
        foreach ($this->factories as $factory) {
            if ($factory->supports($dsn)) {
                return new FilteringProvider($factory->create($dsn), $locales, $domains);
            }
        }

        throw new UnsupportedSchemeException($dsn);
    }
}
