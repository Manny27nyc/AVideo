/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/acm/2015-12-08/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'CertificateValidated' => [ 'delay' => 60, 'maxAttempts' => 40, 'operation' => 'DescribeCertificate', 'acceptors' => [ [ 'matcher' => 'pathAll', 'expected' => 'SUCCESS', 'argument' => 'Certificate.DomainValidationOptions[].ValidationStatus', 'state' => 'success', ], [ 'matcher' => 'pathAny', 'expected' => 'PENDING_VALIDATION', 'argument' => 'Certificate.DomainValidationOptions[].ValidationStatus', 'state' => 'retry', ], [ 'matcher' => 'path', 'expected' => 'FAILED', 'argument' => 'Certificate.Status', 'state' => 'failure', ], [ 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', 'state' => 'failure', ], ], ], ],];
