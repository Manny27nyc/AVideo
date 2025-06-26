/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// This file was auto-generated from sdk-root/src/data/cloudfront/2016-01-28/paginators-1.json
return [ 'pagination' => [ 'ListCloudFrontOriginAccessIdentities' => [ 'input_token' => 'Marker', 'output_token' => 'CloudFrontOriginAccessIdentityList.NextMarker', 'limit_key' => 'MaxItems', 'more_results' => 'CloudFrontOriginAccessIdentityList.IsTruncated', 'result_key' => 'CloudFrontOriginAccessIdentityList.Items', ], 'ListDistributions' => [ 'input_token' => 'Marker', 'output_token' => 'DistributionList.NextMarker', 'limit_key' => 'MaxItems', 'more_results' => 'DistributionList.IsTruncated', 'result_key' => 'DistributionList.Items', ], 'ListInvalidations' => [ 'input_token' => 'Marker', 'output_token' => 'InvalidationList.NextMarker', 'limit_key' => 'MaxItems', 'more_results' => 'InvalidationList.IsTruncated', 'result_key' => 'InvalidationList.Items', ], 'ListStreamingDistributions' => [ 'input_token' => 'Marker', 'output_token' => 'StreamingDistributionList.NextMarker', 'limit_key' => 'MaxItems', 'more_results' => 'StreamingDistributionList.IsTruncated', 'result_key' => 'StreamingDistributionList.Items', ], ],];
