/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/*!
* A simple example that shows how to connect users to providers using OpenID.
*/

include 'vendor/autoload.php';

$config = [
    'callback' => Hybridauth\HttpClient\Util::getCurrentUrl(),

    'openid_identifier' => 'https://open.login.yahooapis.com/openid20/www.yahoo.com/xrds',
    // 'openid_identifier' => 'https://openid.stackexchange.com/',
    // 'openid_identifier' => 'http://steamcommunity.com/openid',
    // etc.
];

try {
    $adapter = new Hybridauth\Provider\OpenID($config);

    $adapter->authenticate();

    $tokens = $adapter->getAccessToken();
    $userProfile = $adapter->getUserProfile();

    // print_r($tokens);
    // print_r($userProfile);

    $adapter->disconnect();
} catch (Exception $e) {
    echo $e->getMessage();
}
