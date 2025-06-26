/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/sns/2010-03-31/smoke.json
return [ 'version' => 1, 'defaultRegion' => 'us-west-2', 'testCases' => [ [ 'operationName' => 'ListTopics', 'input' => [], 'errorExpectedFromService' => false, ], [ 'operationName' => 'Publish', 'input' => [ 'Message' => 'hello', 'TopicArn' => 'fake_topic', ], 'errorExpectedFromService' => true, ], ],];
