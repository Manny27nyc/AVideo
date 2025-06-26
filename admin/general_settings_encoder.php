/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$filter = [
    'useEncoderNetworkRecomendation' => __('Let the encoder network (If configured) choose what is the best encoder to use'),
    'doNotShowEncoderResolutionLow' => __('Do not allow encode in Low resolution'),
    'doNotShowEncoderResolutionSD' => __('Do not allow encode in SD resolution'),
    'doNotShowEncoderResolutionHD' => __('Do not allow encode in HD resolution'),
    'makeVideosInactiveAfterEncode' => __('Maybe you need to approve or check something on your video before make it public'),
    'makeVideosUnlistedAfterEncode' => __('Maybe you need to approve or check something on your video before make it public'),
];

createTable("CustomizeAdvanced", $filter);
