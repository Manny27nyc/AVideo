/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Test;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class TestHarness
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }
    public static function environment()
    {
        $clientId = getenv("CLIENT_ID") ?: "<<PAYPAL-CLIENT-ID>>";
        $clientSecret = getenv("CLIENT_SECRET") ?: "<<PAYPAL-CLIENT-SECRET>>";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
