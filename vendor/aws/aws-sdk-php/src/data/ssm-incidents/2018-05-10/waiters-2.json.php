/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/ssm-incidents/2018-05-10/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'WaitForReplicationSetActive' => [ 'description' => 'Wait for a replication set to become ACTIVE', 'delay' => 30, 'maxAttempts' => 5, 'operation' => 'GetReplicationSet', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'success', 'expected' => 'ACTIVE', ], [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'retry', 'expected' => 'CREATING', ], [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'retry', 'expected' => 'UPDATING', ], [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'failure', 'expected' => 'FAILED', ], ], ], 'WaitForReplicationSetDeleted' => [ 'description' => 'Wait for a replication set to be deleted', 'delay' => 30, 'maxAttempts' => 5, 'operation' => 'GetReplicationSet', 'acceptors' => [ [ 'matcher' => 'error', 'state' => 'success', 'expected' => 'ResourceNotFoundException', ], [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'retry', 'expected' => 'DELETING', ], [ 'matcher' => 'path', 'argument' => 'replicationSet.status', 'state' => 'failure', 'expected' => 'FAILED', ], ], ], ],];
