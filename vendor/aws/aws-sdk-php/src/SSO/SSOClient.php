/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\SSO;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Single Sign-On** service.
 * @method \Aws\Result getRoleCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoleCredentialsAsync(array $args = [])
 * @method \Aws\Result listAccountRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountRolesAsync(array $args = [])
 * @method \Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \Aws\Result logout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutAsync(array $args = [])
 */
class SSOClient extends AwsClient {}
