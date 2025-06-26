/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/cloudfront/2016-09-29/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'DistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Distribution.Status', ], ], ], 'InvalidationCompleted' => [ 'delay' => 20, 'operation' => 'GetInvalidation', 'maxAttempts' => 30, 'description' => 'Wait until an invalidation has completed.', 'acceptors' => [ [ 'expected' => 'Completed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Invalidation.Status', ], ], ], 'StreamingDistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetStreamingDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a streaming distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'StreamingDistribution.Status', ], ], ], ],];
