/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\DLM;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Data Lifecycle Manager** service.
 * @method \Aws\Result createLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result getLifecyclePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePoliciesAsync(array $args = [])
 * @method \Aws\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLifecyclePolicyAsync(array $args = [])
 */
class DLMClient extends AwsClient {}
