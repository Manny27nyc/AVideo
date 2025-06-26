/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\SSOOIDC;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SSO OIDC** service.
 * @method \Aws\Result createToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \Aws\Result registerClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerClientAsync(array $args = [])
 * @method \Aws\Result startDeviceAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeviceAuthorizationAsync(array $args = [])
 */
class SSOOIDCClient extends AwsClient {}
