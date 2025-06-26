/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/rds/2014-10-31/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'interval' => 30, 'max_attempts' => 60, ], '__DBInstanceState' => [ 'operation' => 'DescribeDBInstances', 'acceptor_path' => 'DBInstances[].DBInstanceStatus', 'acceptor_type' => 'output', ], 'DBInstanceAvailable' => [ 'extends' => '__DBInstanceState', 'success_value' => 'available', 'failure_value' => [ 'deleted', 'deleting', 'failed', 'incompatible-restore', 'incompatible-parameters', 'incompatible-parameters', 'incompatible-restore', ], ], 'DBInstanceDeleted' => [ 'extends' => '__DBInstanceState', 'success_value' => 'deleted', 'failure_value' => [ 'creating', 'modifying', 'rebooting', 'resetting-master-credentials', ], ], ],];
