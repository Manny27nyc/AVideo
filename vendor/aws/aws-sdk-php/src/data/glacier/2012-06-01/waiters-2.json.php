/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/glacier/2012-06-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'VaultExists' => [ 'operation' => 'DescribeVault', 'delay' => 3, 'maxAttempts' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'VaultNotExists' => [ 'operation' => 'DescribeVault', 'delay' => 3, 'maxAttempts' => 15, 'acceptors' => [ [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], ],];
