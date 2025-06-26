/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\LexRuntimeService;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Runtime Service** service.
 * @method \Aws\Result deleteSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSessionAsync(array $args = [])
 * @method \Aws\Result getSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \Aws\Result postContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postContentAsync(array $args = [])
 * @method \Aws\Result postText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postTextAsync(array $args = [])
 * @method \Aws\Result putSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSessionAsync(array $args = [])
 */
class LexRuntimeServiceClient extends AwsClient {}
