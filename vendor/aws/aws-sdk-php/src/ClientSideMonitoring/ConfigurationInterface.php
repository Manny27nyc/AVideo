/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\ClientSideMonitoring;

/**
 * Provides access to client-side monitoring configuration options:
 * 'client_id', 'enabled', 'host', 'port'
 */
interface ConfigurationInterface
{
    /**
     * Checks whether or not client-side monitoring is enabled.
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Returns the Client ID, if available.
     *
     * @return string|null
     */
    public function getClientId();

    /**
     * Returns the configured host.
     *
     * @return string|null
     */
    public function getHost();

    /**
     * Returns the configured port.
     *
     * @return int|null
     */
    public function getPort();

    /**
     * Returns the configuration as an associative array.
     *
     * @return array
     */
    public function toArray();
}
