/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/iam/2010-05-08/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'InstanceProfileExists' => [ 'delay' => 1, 'operation' => 'GetInstanceProfile', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 200, 'matcher' => 'status', 'state' => 'success', ], [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 404, ], ], ], 'UserExists' => [ 'delay' => 1, 'operation' => 'GetUser', 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'NoSuchEntity', ], ], ], 'RoleExists' => [ 'delay' => 1, 'operation' => 'GetRole', 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'NoSuchEntity', ], ], ], 'PolicyExists' => [ 'delay' => 1, 'operation' => 'GetPolicy', 'maxAttempts' => 20, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'NoSuchEntity', ], ], ], ],];
