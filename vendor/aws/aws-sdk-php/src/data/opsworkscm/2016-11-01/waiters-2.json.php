/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/opsworkscm/2016-11-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'NodeAssociated' => [ 'delay' => 15, 'maxAttempts' => 15, 'operation' => 'DescribeNodeAssociationStatus', 'description' => 'Wait until node is associated or disassociated.', 'acceptors' => [ [ 'expected' => 'SUCCESS', 'state' => 'success', 'matcher' => 'path', 'argument' => 'NodeAssociationStatus', ], [ 'expected' => 'FAILED', 'state' => 'failure', 'matcher' => 'path', 'argument' => 'NodeAssociationStatus', ], ], ], ],];
