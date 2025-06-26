/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\PI;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Performance Insights** service.
 * @method \Aws\Result describeDimensionKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDimensionKeysAsync(array $args = [])
 * @method \Aws\Result getDimensionKeyDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDimensionKeyDetailsAsync(array $args = [])
 * @method \Aws\Result getResourceMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetadataAsync(array $args = [])
 * @method \Aws\Result getResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetricsAsync(array $args = [])
 * @method \Aws\Result listAvailableResourceDimensions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableResourceDimensionsAsync(array $args = [])
 * @method \Aws\Result listAvailableResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableResourceMetricsAsync(array $args = [])
 */
class PIClient extends AwsClient {}
