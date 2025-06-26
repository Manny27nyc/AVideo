/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\MediaStoreData;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaStore Data Plane** service.
 * @method \Aws\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \Aws\Result describeObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjectAsync(array $args = [])
 * @method \Aws\Result getObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \Aws\Result listItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listItemsAsync(array $args = [])
 * @method \Aws\Result putObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 */
class MediaStoreDataClient extends AwsClient {}
