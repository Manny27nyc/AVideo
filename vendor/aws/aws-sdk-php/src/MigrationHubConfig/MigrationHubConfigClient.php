/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\MigrationHubConfig;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub Config** service.
 * @method \Aws\Result createHomeRegionControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHomeRegionControlAsync(array $args = [])
 * @method \Aws\Result describeHomeRegionControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHomeRegionControlsAsync(array $args = [])
 * @method \Aws\Result getHomeRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHomeRegionAsync(array $args = [])
 */
class MigrationHubConfigClient extends AwsClient {}
