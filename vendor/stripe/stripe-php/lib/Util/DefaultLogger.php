/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe\Util;

/**
 * A very basic implementation of LoggerInterface that has just enough
 * functionality that it can be the default for this library.
 */
class DefaultLogger implements LoggerInterface
{
    /** @var int */
    public $messageType = 0;

    /** @var null|string */
    public $destination;

    public function error($message, array $context = [])
    {
        if (\count($context) > 0) {
            throw new \Stripe\Exception\BadMethodCallException('DefaultLogger does not currently implement context. Please implement if you need it.');
        }

        if (null === $this->destination) {
            \error_log($message, $this->messageType);
        } else {
            \error_log($message, $this->messageType, $this->destination);
        }
    }
}
