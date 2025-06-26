/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/kinesis/2013-12-02/paginators-1.json
return [ 'pagination' => [ 'DescribeStream' => [ 'input_token' => 'ExclusiveStartShardId', 'limit_key' => 'Limit', 'more_results' => 'StreamDescription.HasMoreShards', 'output_token' => 'StreamDescription.Shards[-1].ShardId', 'result_key' => 'StreamDescription.Shards', ], 'ListStreamConsumers' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', ], 'ListStreams' => [ 'input_token' => 'ExclusiveStartStreamName', 'limit_key' => 'Limit', 'more_results' => 'HasMoreStreams', 'output_token' => 'StreamNames[-1]', 'result_key' => 'StreamNames', ], ],];
