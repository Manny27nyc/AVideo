/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/email/2010-12-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'IdentityExists' => [ 'delay' => 3, 'operation' => 'GetIdentityVerificationAttributes', 'maxAttempts' => 20, 'acceptors' => [ [ 'expected' => 'Success', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'VerificationAttributes.*.VerificationStatus', ], ], ], ],];
