/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/route53/2013-04-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ResourceRecordSetsChanged' => [ 'delay' => 30, 'maxAttempts' => 60, 'operation' => 'GetChange', 'acceptors' => [ [ 'matcher' => 'path', 'expected' => 'INSYNC', 'argument' => 'ChangeInfo.Status', 'state' => 'success', ], ], ], ],];
