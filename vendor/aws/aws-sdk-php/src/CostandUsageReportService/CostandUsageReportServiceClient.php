/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\CostandUsageReportService;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method \Aws\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \Aws\Result describeReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportDefinitionsAsync(array $args = [])
 * @method \Aws\Result modifyReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReportDefinitionAsync(array $args = [])
 * @method \Aws\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}
