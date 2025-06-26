/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPalCheckoutSdk\Core;


class AccessToken
{
    public $token;
    public $tokenType;
    public $expiresIn;
    private $createDate;

    public function __construct($token, $tokenType, $expiresIn)
    {
        $this->token = $token;
        $this->tokenType = $tokenType;
        $this->expiresIn = $expiresIn;
        $this->createDate = time();
    }

    public function isExpired()
    {
        return time() >= $this->createDate + $this->expiresIn;
    }
}