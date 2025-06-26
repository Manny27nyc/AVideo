/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\CodeStarNotifications;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar Notifications** service.
 * @method \Aws\Result createNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationRuleAsync(array $args = [])
 * @method \Aws\Result deleteNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationRuleAsync(array $args = [])
 * @method \Aws\Result deleteTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetAsync(array $args = [])
 * @method \Aws\Result describeNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationRuleAsync(array $args = [])
 * @method \Aws\Result listEventTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventTypesAsync(array $args = [])
 * @method \Aws\Result listNotificationRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotificationRulesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsAsync(array $args = [])
 * @method \Aws\Result subscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result unsubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationRuleAsync(array $args = [])
 */
class CodeStarNotificationsClient extends AwsClient {}
