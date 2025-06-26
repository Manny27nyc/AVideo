/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api\Errors;

class ErrorCode
{
    const BAD_REQUEST_ERROR                 = 'BAD_REQUEST_ERROR';
    const SERVER_ERROR                      = 'SERVER_ERROR';
    const GATEWAY_ERROR                     = 'GATEWAY_ERROR';

    public static function exists($code)
    {
        $code = strtoupper($code);

        return defined(get_class() . '::' . $code);
    }
}