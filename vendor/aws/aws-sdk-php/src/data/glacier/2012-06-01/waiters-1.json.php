/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/glacier/2012-06-01/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'interval' => 3, 'max_attempts' => 15, ], '__VaultState' => [ 'operation' => 'DescribeVault', ], 'VaultExists' => [ 'extends' => '__VaultState', 'ignore_errors' => [ 'ResourceNotFoundException', ], 'success_type' => 'output', ], 'VaultNotExists' => [ 'extends' => '__VaultState', 'success_type' => 'error', 'success_value' => 'ResourceNotFoundException', ], ],];
