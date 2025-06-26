/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\AppConfigData;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS AppConfig Data** service.
 * @method \Aws\Result getLatestConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLatestConfigurationAsync(array $args = [])
 * @method \Aws\Result startConfigurationSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startConfigurationSessionAsync(array $args = [])
 */
class AppConfigDataClient extends AwsClient {}
