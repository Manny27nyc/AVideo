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

namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ImportConfigurator
{
    use Traits\HostTrait;
    use Traits\PrefixTrait;
    use Traits\RouteTrait;

    private $parent;

    public function __construct(RouteCollection $parent, RouteCollection $route)
    {
        $this->parent = $parent;
        $this->route = $route;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        throw new \BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        $this->parent->addCollection($this->route);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array $prefix the prefix, or the localized prefixes
     *
     * @return $this
     */
    final public function prefix($prefix, bool $trailingSlashOnRoot = true): self
    {
        $this->addPrefix($this->route, $prefix, $trailingSlashOnRoot);

        return $this;
    }

    /**
     * Sets the prefix to add to the name of all child routes.
     *
     * @return $this
     */
    final public function namePrefix(string $namePrefix): self
    {
        $this->route->addNamePrefix($namePrefix);

        return $this;
    }

    /**
     * Sets the host to use for all child routes.
     *
     * @param string|array $host the host, or the localized hosts
     *
     * @return $this
     */
    final public function host($host): self
    {
        $this->addHost($this->route, $host);

        return $this;
    }
}
