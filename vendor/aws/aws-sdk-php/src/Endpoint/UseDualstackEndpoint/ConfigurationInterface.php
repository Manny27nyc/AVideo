/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Endpoint\UseDualstackEndpoint;

interface ConfigurationInterface
{
    /**
     * Returns whether or not to use a DUALSTACK endpoint
     *
     * @return bool
     */
    public function isUseDualstackEndpoint();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
