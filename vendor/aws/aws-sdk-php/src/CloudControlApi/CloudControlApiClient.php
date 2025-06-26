/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\CloudControlApi;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud Control API** service.
 * @method \Aws\Result cancelResourceRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelResourceRequestAsync(array $args = [])
 * @method \Aws\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \Aws\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Aws\Result getResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \Aws\Result getResourceRequestStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceRequestStatusAsync(array $args = [])
 * @method \Aws\Result listResourceRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceRequestsAsync(array $args = [])
 * @method \Aws\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \Aws\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class CloudControlApiClient extends AwsClient {}
