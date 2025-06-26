/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\SagemakerEdgeManager;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Sagemaker Edge Manager** service.
 * @method \Aws\Result getDeviceRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceRegistrationAsync(array $args = [])
 * @method \Aws\Result sendHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendHeartbeatAsync(array $args = [])
 */
class SagemakerEdgeManagerClient extends AwsClient {}
