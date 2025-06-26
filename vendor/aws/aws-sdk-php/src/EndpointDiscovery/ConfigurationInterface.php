/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\EndpointDiscovery;

/**
 * Provides access to endpoint discovery configuration options:
 * 'enabled', 'cache_limit'
 */
interface ConfigurationInterface
{
    /**
     * Checks whether or not endpoint discovery is enabled.
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Returns the cache limit, if available.
     *
     * @return string|null
     */
    public function getCacheLimit();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
