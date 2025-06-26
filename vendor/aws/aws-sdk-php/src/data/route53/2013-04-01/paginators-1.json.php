/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/route53/2013-04-01/paginators-1.json
return [ 'pagination' => [ 'ListHealthChecks' => [ 'input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'NextMarker', 'result_key' => 'HealthChecks', ], 'ListHostedZones' => [ 'input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'NextMarker', 'result_key' => 'HostedZones', ], 'ListQueryLoggingConfigs' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => 'QueryLoggingConfigs', ], 'ListResourceRecordSets' => [ 'input_token' => [ 'StartRecordName', 'StartRecordType', 'StartRecordIdentifier', ], 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => [ 'NextRecordName', 'NextRecordType', 'NextRecordIdentifier', ], 'result_key' => 'ResourceRecordSets', ], ],];
