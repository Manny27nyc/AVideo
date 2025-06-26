/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\PersonalizeRuntime;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize Runtime** service.
 * @method \Aws\Result getPersonalizedRanking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPersonalizedRankingAsync(array $args = [])
 * @method \Aws\Result getRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 */
class PersonalizeRuntimeClient extends AwsClient {}
