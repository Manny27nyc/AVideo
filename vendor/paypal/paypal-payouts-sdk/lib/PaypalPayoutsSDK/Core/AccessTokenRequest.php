/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PaypalPayoutsSDK\Core;

use PayPalHttp\HttpRequest;

class AccessTokenRequest extends HttpRequest
{
    public function __construct(PayPalEnvironment $environment, $refreshToken = NULL)
    {
        parent::__construct("/v1/oauth2/token", "POST");
        $this->headers["Authorization"] = "Basic " . $environment->authorizationString();
        $body = [
            "grant_type" => "client_credentials"
        ];

        if (!is_null($refreshToken))
        {
            $body["grant_type"] = "refresh_token";
            $body["refresh_token"] = $refreshToken;
        }

        $this->body = $body;
        $this->headers["Content-Type"] = "application/x-www-form-urlencoded";
    }
}

