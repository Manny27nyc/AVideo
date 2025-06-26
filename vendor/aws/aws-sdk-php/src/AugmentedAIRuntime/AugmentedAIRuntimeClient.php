/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\AugmentedAIRuntime;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Augmented AI Runtime** service.
 * @method \Aws\Result deleteHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHumanLoopAsync(array $args = [])
 * @method \Aws\Result describeHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHumanLoopAsync(array $args = [])
 * @method \Aws\Result listHumanLoops(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHumanLoopsAsync(array $args = [])
 * @method \Aws\Result startHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startHumanLoopAsync(array $args = [])
 * @method \Aws\Result stopHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopHumanLoopAsync(array $args = [])
 */
class AugmentedAIRuntimeClient extends AwsClient {}
