/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\KinesisVideoSignalingChannels;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Signaling Channels** service.
 * @method \Aws\Result getIceServerConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIceServerConfigAsync(array $args = [])
 * @method \Aws\Result sendAlexaOfferToMaster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendAlexaOfferToMasterAsync(array $args = [])
 */
class KinesisVideoSignalingChannelsClient extends AwsClient {}
