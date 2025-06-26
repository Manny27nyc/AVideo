/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\ApplicationCostProfiler;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Application Cost Profiler** service.
 * @method \Aws\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \Aws\Result getReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReportDefinitionAsync(array $args = [])
 * @method \Aws\Result importApplicationUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importApplicationUsageAsync(array $args = [])
 * @method \Aws\Result listReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportDefinitionsAsync(array $args = [])
 * @method \Aws\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 * @method \Aws\Result updateReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReportDefinitionAsync(array $args = [])
 */
class ApplicationCostProfilerClient extends AwsClient {}
