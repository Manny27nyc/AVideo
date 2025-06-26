/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPalHttp\Serializer;

class FormPart
{
    private $value;
    private $headers;

    public function __construct($value, $headers)
    {
        $this->value = $value;
        $this->headers = array_merge([], $headers);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
