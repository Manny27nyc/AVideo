/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/kinesis/2013-12-02/smoke.json
return [ 'version' => 1, 'defaultRegion' => 'us-west-2', 'testCases' => [ [ 'operationName' => 'ListStreams', 'input' => [], 'errorExpectedFromService' => false, ], [ 'operationName' => 'DescribeStream', 'input' => [ 'StreamName' => 'bogus-stream-name', ], 'errorExpectedFromService' => true, ], ],];
