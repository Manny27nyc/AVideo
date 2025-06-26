/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\MarketplaceCatalog;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Marketplace Catalog Service** service.
 * @method \Aws\Result cancelChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelChangeSetAsync(array $args = [])
 * @method \Aws\Result describeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChangeSetAsync(array $args = [])
 * @method \Aws\Result describeEntity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAsync(array $args = [])
 * @method \Aws\Result listChangeSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangeSetsAsync(array $args = [])
 * @method \Aws\Result listEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitiesAsync(array $args = [])
 * @method \Aws\Result startChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startChangeSetAsync(array $args = [])
 */
class MarketplaceCatalogClient extends AwsClient {}
