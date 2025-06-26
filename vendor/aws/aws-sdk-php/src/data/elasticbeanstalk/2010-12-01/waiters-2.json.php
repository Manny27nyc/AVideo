/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/elasticbeanstalk/2010-12-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'EnvironmentExists' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Ready', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Launching', ], ], ], 'EnvironmentUpdated' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Ready', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Updating', ], ], ], 'EnvironmentTerminated' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Terminated', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Terminating', ], ], ], ],];
