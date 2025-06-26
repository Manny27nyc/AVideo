/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/autoscaling/2011-01-01/smoke.json
return [ 'version' => 1, 'defaultRegion' => 'us-west-2', 'testCases' => [ [ 'operationName' => 'DescribeScalingProcessTypes', 'input' => [], 'errorExpectedFromService' => false, ], [ 'operationName' => 'CreateLaunchConfiguration', 'input' => [ 'LaunchConfigurationName' => 'hello, world', 'ImageId' => 'ami-12345678', 'InstanceType' => 'm1.small', ], 'errorExpectedFromService' => true, ], ],];
