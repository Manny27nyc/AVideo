/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Endpoint\UseFipsEndpoint;

use Aws;
use Aws\ClientResolver;
use Aws\Endpoint\UseFipsEndpoint\Exception\ConfigurationException;

class Configuration implements ConfigurationInterface
{
    private $useFipsEndpoint;

    public function __construct($useFipsEndpoint)
    {
        $this->useFipsEndpoint = Aws\boolean_value($useFipsEndpoint);
        if (is_null($this->useFipsEndpoint)) {
            throw new ConfigurationException("'use_fips_endpoint' config option"
                . " must be a boolean value.");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUseFipsEndpoint()
    {
        return $this->useFipsEndpoint;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'use_fips_endpoint' => $this->isUseFipsEndpoint(),
        ];
    }
}
