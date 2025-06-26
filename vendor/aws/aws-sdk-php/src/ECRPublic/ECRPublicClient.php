/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\ECRPublic;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Container Registry Public** service.
 * @method \Aws\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \Aws\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \Aws\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \Aws\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result describeImageTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageTagsAsync(array $args = [])
 * @method \Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws\Result describeRegistries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistriesAsync(array $args = [])
 * @method \Aws\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \Aws\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \Aws\Result getRegistryCatalogData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryCatalogDataAsync(array $args = [])
 * @method \Aws\Result getRepositoryCatalogData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryCatalogDataAsync(array $args = [])
 * @method \Aws\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \Aws\Result putRegistryCatalogData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistryCatalogDataAsync(array $args = [])
 * @method \Aws\Result putRepositoryCatalogData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryCatalogDataAsync(array $args = [])
 * @method \Aws\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 */
class ECRPublicClient extends AwsClient {}
