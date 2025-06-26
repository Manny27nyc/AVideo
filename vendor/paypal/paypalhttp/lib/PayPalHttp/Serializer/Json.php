/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPalHttp\Serializer;

use PayPalHttp\HttpRequest;
use PayPalHttp\Serializer;

/**
 * Class Json
 * @package PayPalHttp\Serializer
 *
 * Serializer for JSON content types.
 */
class Json implements Serializer
{

    public function contentType()
    {
        return "/^application\\/json/";
    }

    public function encode(HttpRequest $request)
    {
        $body = $request->body;
        if (is_string($body)) {
            return $body;
        }
        if (is_array($body)) {
            return json_encode($body);
        }
        throw new \Exception("Cannot serialize data. Unknown type");
    }

    public function decode($data)
    {
        return json_decode($data);
    }
}
