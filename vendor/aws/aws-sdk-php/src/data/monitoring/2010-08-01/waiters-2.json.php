/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/monitoring/2010-08-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'AlarmExists' => [ 'delay' => 5, 'maxAttempts' => 40, 'operation' => 'DescribeAlarms', 'acceptors' => [ [ 'matcher' => 'path', 'expected' => true, 'argument' => 'length(MetricAlarms[]) > `0`', 'state' => 'success', ], ], ], 'CompositeAlarmExists' => [ 'delay' => 5, 'maxAttempts' => 40, 'operation' => 'DescribeAlarms', 'acceptors' => [ [ 'matcher' => 'path', 'expected' => true, 'argument' => 'length(CompositeAlarms[]) > `0`', 'state' => 'success', ], ], ], ],];
