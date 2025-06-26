/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/health/2016-08-04/paginators-1.json
return [ 'pagination' => [ 'DescribeAffectedAccountsForOrganization' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'non_aggregate_keys' => [ 'eventScopeCode', ], 'output_token' => 'nextToken', 'result_key' => 'affectedAccounts', ], 'DescribeAffectedEntities' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'output_token' => 'nextToken', 'result_key' => 'entities', ], 'DescribeAffectedEntitiesForOrganization' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'non_aggregate_keys' => [ 'failedSet', ], 'output_token' => 'nextToken', 'result_key' => 'entities', ], 'DescribeEntityAggregates' => [ 'result_key' => 'entityAggregates', ], 'DescribeEventAggregates' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'output_token' => 'nextToken', 'result_key' => 'eventAggregates', ], 'DescribeEventTypes' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'output_token' => 'nextToken', 'result_key' => 'eventTypes', ], 'DescribeEvents' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'output_token' => 'nextToken', 'result_key' => 'events', ], 'DescribeEventsForOrganization' => [ 'input_token' => 'nextToken', 'limit_key' => 'maxResults', 'output_token' => 'nextToken', 'result_key' => 'events', ], ],];
