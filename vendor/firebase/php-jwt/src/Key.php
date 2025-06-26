/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Firebase\JWT;

use InvalidArgumentException;
use OpenSSLAsymmetricKey;

class Key
{
    /** @var string $algorithm */
    private $algorithm;

    /** @var string|resource|OpenSSLAsymmetricKey $keyMaterial */
    private $keyMaterial;

    /**
     * @param string|resource|OpenSSLAsymmetricKey $keyMaterial
     * @param string $algorithm
     */
    public function __construct($keyMaterial, $algorithm)
    {
        if (
            !is_string($keyMaterial)
            && !is_resource($keyMaterial)
            && !$keyMaterial instanceof OpenSSLAsymmetricKey
        ) {
            throw new InvalidArgumentException('Type error: $keyMaterial must be a string, resource, or OpenSSLAsymmetricKey');
        }

        if (empty($keyMaterial)) {
            throw new InvalidArgumentException('Type error: $keyMaterial must not be empty');
        }

        if (!is_string($algorithm)|| empty($keyMaterial)) {
            throw new InvalidArgumentException('Type error: $algorithm must be a string');
        }

        $this->keyMaterial = $keyMaterial;
        $this->algorithm = $algorithm;
    }

    /**
     * Return the algorithm valid for this key
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @return string|resource|OpenSSLAsymmetricKey
     */
    public function getKeyMaterial()
    {
        return $this->keyMaterial;
    }
}
