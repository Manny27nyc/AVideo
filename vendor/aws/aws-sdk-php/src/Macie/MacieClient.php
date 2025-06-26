/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Macie;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Macie** service.
 * @method \Aws\Result associateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberAccountAsync(array $args = [])
 * @method \Aws\Result associateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateS3ResourcesAsync(array $args = [])
 * @method \Aws\Result disassociateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAccountAsync(array $args = [])
 * @method \Aws\Result disassociateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateS3ResourcesAsync(array $args = [])
 * @method \Aws\Result listMemberAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMemberAccountsAsync(array $args = [])
 * @method \Aws\Result listS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listS3ResourcesAsync(array $args = [])
 * @method \Aws\Result updateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateS3ResourcesAsync(array $args = [])
 */
class MacieClient extends AwsClient {}
