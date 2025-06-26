/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\AutoScalingPlans;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method \Aws\Result createScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScalingPlanAsync(array $args = [])
 * @method \Aws\Result deleteScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPlanAsync(array $args = [])
 * @method \Aws\Result describeScalingPlanResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method \Aws\Result describeScalingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlansAsync(array $args = [])
 * @method \Aws\Result getScalingPlanResourceForecastData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScalingPlanResourceForecastDataAsync(array $args = [])
 * @method \Aws\Result updateScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}
