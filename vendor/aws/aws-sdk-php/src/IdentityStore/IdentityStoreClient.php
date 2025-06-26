/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\IdentityStore;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SSO Identity Store** service.
 * @method \Aws\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 */
class IdentityStoreClient extends AwsClient {}
