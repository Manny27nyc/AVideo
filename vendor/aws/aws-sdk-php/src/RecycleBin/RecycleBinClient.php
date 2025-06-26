/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\RecycleBin;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Recycle Bin** service.
 * @method \Aws\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \Aws\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \Aws\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \Aws\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 */
class RecycleBinClient extends AwsClient {}
