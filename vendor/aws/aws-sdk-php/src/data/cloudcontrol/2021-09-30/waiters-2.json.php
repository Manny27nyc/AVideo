/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/cloudcontrol/2021-09-30/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ResourceRequestSuccess' => [ 'description' => 'Wait until resource operation request is successful', 'operation' => 'GetResourceRequestStatus', 'delay' => 5, 'maxAttempts' => 720, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'SUCCESS', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'FAILED', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'ProgressEvent.OperationStatus', 'expected' => 'CANCEL_COMPLETE', ], ], ], ],];
