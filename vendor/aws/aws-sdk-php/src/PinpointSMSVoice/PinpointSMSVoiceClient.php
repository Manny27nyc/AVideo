/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\PinpointSMSVoice;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint SMS and Voice Service** service.
 * @method \Aws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \Aws\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \Aws\Result getConfigurationSetEventDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method \Aws\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \Aws\Result sendVoiceMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendVoiceMessageAsync(array $args = [])
 * @method \Aws\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 */
class PinpointSMSVoiceClient extends AwsClient {}
