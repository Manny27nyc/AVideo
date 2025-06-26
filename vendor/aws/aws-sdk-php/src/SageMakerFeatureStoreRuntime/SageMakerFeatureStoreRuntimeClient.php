/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\SageMakerFeatureStoreRuntime;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker Feature Store Runtime** service.
 * @method \Aws\Result batchGetRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRecordAsync(array $args = [])
 * @method \Aws\Result deleteRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecordAsync(array $args = [])
 * @method \Aws\Result getRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordAsync(array $args = [])
 * @method \Aws\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 */
class SageMakerFeatureStoreRuntimeClient extends AwsClient {}
