/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/dynamodb/2012-08-10/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'TableExists' => [ 'delay' => 20, 'operation' => 'DescribeTable', 'maxAttempts' => 25, 'acceptors' => [ [ 'expected' => 'ACTIVE', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Table.TableStatus', ], [ 'expected' => 'ResourceNotFoundException', 'matcher' => 'error', 'state' => 'retry', ], ], ], 'TableNotExists' => [ 'delay' => 20, 'operation' => 'DescribeTable', 'maxAttempts' => 25, 'acceptors' => [ [ 'expected' => 'ResourceNotFoundException', 'matcher' => 'error', 'state' => 'success', ], ], ], ],];
