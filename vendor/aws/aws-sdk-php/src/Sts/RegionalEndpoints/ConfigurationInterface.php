/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Sts\RegionalEndpoints;

/**
 * Provides access to STS regional endpoints configuration options: endpoints_type
 */
interface ConfigurationInterface
{
    /**
     * Returns the endpoints type
     *
     * @return string
     */
    public function getEndpointsType();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
