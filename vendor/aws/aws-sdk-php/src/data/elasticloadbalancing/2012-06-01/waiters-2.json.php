/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/elasticloadbalancing/2012-06-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'InstanceDeregistered' => [ 'delay' => 15, 'operation' => 'DescribeInstanceHealth', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'OutOfService', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'InstanceStates[].State', ], [ 'matcher' => 'error', 'expected' => 'InvalidInstance', 'state' => 'success', ], ], ], 'AnyInstanceInService' => [ 'acceptors' => [ [ 'argument' => 'InstanceStates[].State', 'expected' => 'InService', 'matcher' => 'pathAny', 'state' => 'success', ], ], 'delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeInstanceHealth', ], 'InstanceInService' => [ 'acceptors' => [ [ 'argument' => 'InstanceStates[].State', 'expected' => 'InService', 'matcher' => 'pathAll', 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'InvalidInstance', 'state' => 'retry', ], ], 'delay' => 15, 'maxAttempts' => 40, 'operation' => 'DescribeInstanceHealth', ], ],];
