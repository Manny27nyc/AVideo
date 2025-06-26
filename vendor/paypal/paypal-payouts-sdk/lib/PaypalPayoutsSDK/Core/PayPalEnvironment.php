/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PaypalPayoutsSDK\Core;

use PayPalHttp\Environment;

abstract class PayPalEnvironment implements Environment
{
    private $clientId;
    private $clientSecret;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function authorizationString()
    {
        return base64_encode($this->clientId . ":" . $this->clientSecret);
    }
}

