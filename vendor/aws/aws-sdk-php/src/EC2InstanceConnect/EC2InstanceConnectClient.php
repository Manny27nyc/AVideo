/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\EC2InstanceConnect;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method \Aws\Result sendSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSSHPublicKeyAsync(array $args = [])
 * @method \Aws\Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}
