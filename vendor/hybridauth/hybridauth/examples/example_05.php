/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/*!
* A simple example that shows how to use Guzzle as a Http Client for Hybridauth instead of PHP Curl extention.
*/

include 'vendor/autoload.php';

$config = [
    'callback' => Hybridauth\HttpClient\Util::getCurrentUrl(),

    'keys' => ['id' => '', 'secret' => ''],
];

$guzzle = new Hybridauth\HttpClient\Guzzle(null, [
    // 'verify' => true, # Set to false to disable SSL certificate verification
]);

try {
    $adapter = new Hybridauth\Provider\Github($config, $guzzle);

    $adapter->authenticate();

    $tokens = $adapter->getAccessToken();
    $userProfile = $adapter->getUserProfile();

    // print_r($tokens);
    // print_r($userProfile);

    $adapter->disconnect();
} catch (Exception $e) {
    echo $e->getMessage();
}
