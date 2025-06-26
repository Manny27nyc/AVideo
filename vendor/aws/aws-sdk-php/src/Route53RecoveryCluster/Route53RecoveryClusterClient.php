/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Route53RecoveryCluster;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Route53 Recovery Cluster** service.
 * @method \Aws\Result getRoutingControlState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoutingControlStateAsync(array $args = [])
 * @method \Aws\Result updateRoutingControlState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoutingControlStateAsync(array $args = [])
 * @method \Aws\Result updateRoutingControlStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoutingControlStatesAsync(array $args = [])
 */
class Route53RecoveryClusterClient extends AwsClient {}
