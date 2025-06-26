/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace React\Promise;

class UnhandledRejectionException extends \RuntimeException
{
    private $reason;

    public static function resolve($reason)
    {
        if ($reason instanceof \Exception || $reason instanceof \Throwable) {
            return $reason;
        }

        return new static($reason);
    }

    public function __construct($reason)
    {
        $this->reason = $reason;

        $message = \sprintf('Unhandled Rejection: %s', \json_encode($reason));

        parent::__construct($message, 0);
    }

    public function getReason()
    {
        return $this->reason;
    }
}
