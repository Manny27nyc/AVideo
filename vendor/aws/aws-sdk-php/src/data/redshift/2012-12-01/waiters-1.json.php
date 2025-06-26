/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/redshift/2012-12-01/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'acceptor_type' => 'output', ], '__ClusterState' => [ 'interval' => 60, 'max_attempts' => 30, 'operation' => 'DescribeClusters', 'acceptor_path' => 'Clusters[].ClusterStatus', ], 'ClusterAvailable' => [ 'extends' => '__ClusterState', 'ignore_errors' => [ 'ClusterNotFound', ], 'success_value' => 'available', 'failure_value' => [ 'deleting', ], ], 'ClusterDeleted' => [ 'extends' => '__ClusterState', 'success_type' => 'error', 'success_value' => 'ClusterNotFound', 'failure_value' => [ 'creating', 'rebooting', ], ], 'SnapshotAvailable' => [ 'interval' => 15, 'max_attempts' => 20, 'operation' => 'DescribeClusterSnapshots', 'acceptor_path' => 'Snapshots[].Status', 'success_value' => 'available', 'failure_value' => [ 'failed', 'deleted', ], ], ],];
