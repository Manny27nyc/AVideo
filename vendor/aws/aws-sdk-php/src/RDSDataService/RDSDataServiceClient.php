/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\RDSDataService;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS RDS DataService** service.
 * @method \Aws\Result batchExecuteStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = [])
 * @method \Aws\Result beginTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise beginTransactionAsync(array $args = [])
 * @method \Aws\Result commitTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise commitTransactionAsync(array $args = [])
 * @method \Aws\Result executeSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeSqlAsync(array $args = [])
 * @method \Aws\Result executeStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeStatementAsync(array $args = [])
 * @method \Aws\Result rollbackTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rollbackTransactionAsync(array $args = [])
 */
class RDSDataServiceClient extends AwsClient {}
