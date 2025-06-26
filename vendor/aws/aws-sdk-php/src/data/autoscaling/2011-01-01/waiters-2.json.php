/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/autoscaling/2011-01-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'GroupExists' => [ 'acceptors' => [ [ 'argument' => 'length(AutoScalingGroups) > `0`', 'expected' => true, 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'length(AutoScalingGroups) > `0`', 'expected' => false, 'matcher' => 'path', 'state' => 'retry', ], ], 'delay' => 5, 'maxAttempts' => 10, 'operation' => 'DescribeAutoScalingGroups', ], 'GroupInService' => [ 'acceptors' => [ [ 'argument' => 'contains(AutoScalingGroups[].[length(Instances[?LifecycleState==\'InService\']) >= MinSize][], `false`)', 'expected' => false, 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'contains(AutoScalingGroups[].[length(Instances[?LifecycleState==\'InService\']) >= MinSize][], `false`)', 'expected' => true, 'matcher' => 'path', 'state' => 'retry', ], ], 'delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeAutoScalingGroups', ], 'GroupNotExists' => [ 'acceptors' => [ [ 'argument' => 'length(AutoScalingGroups) > `0`', 'expected' => false, 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'length(AutoScalingGroups) > `0`', 'expected' => true, 'matcher' => 'path', 'state' => 'retry', ], ], 'delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeAutoScalingGroups', ], ],];
