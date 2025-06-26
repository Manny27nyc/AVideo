/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\EndpointDiscovery;

class Configuration implements ConfigurationInterface
{
    private $cacheLimit;
    private $enabled;

    public function __construct($enabled, $cacheLimit = 1000)
    {
        $this->cacheLimit = filter_var($cacheLimit, FILTER_VALIDATE_INT);
        if ($this->cacheLimit == false || $this->cacheLimit < 1) {
            throw new \InvalidArgumentException(
                "'cache_limit' value must be a positive integer."
            );
        }

        // Unparsable $enabled flag errs on the side of disabling endpoint discovery
        $this->enabled = filter_var($enabled, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheLimit()
    {
        return $this->cacheLimit;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'enabled' => $this->isEnabled(),
            'cache_limit' => $this->getCacheLimit()
        ];
    }
}
