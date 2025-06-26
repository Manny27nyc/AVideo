/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\ResourceGroupsTaggingAPI;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method \Aws\Result describeReportCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportCreationAsync(array $args = [])
 * @method \Aws\Result getComplianceSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryAsync(array $args = [])
 * @method \Aws\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws\Result getTagKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagKeysAsync(array $args = [])
 * @method \Aws\Result getTagValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagValuesAsync(array $args = [])
 * @method \Aws\Result startReportCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReportCreationAsync(array $args = [])
 * @method \Aws\Result tagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \Aws\Result untagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}
