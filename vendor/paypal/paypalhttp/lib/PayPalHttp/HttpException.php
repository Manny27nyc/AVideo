/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPalHttp;

class HttpException extends IOException
{
    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var array
     */
    public $headers;

    /**
     * @param string $message
     * @param int $statusCode
     * @param array $headers
     */
    public function __construct($message, $statusCode, $headers)
    {
        parent::__construct($message);
        $this->statusCode = $statusCode;
        $this->headers = $headers;
    }
}
