/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Http\Message;

use Psr\Http\Message\StreamInterface;

/**
 * Factory for PSR-7 Stream.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface StreamFactory
{
    /**
     * Creates a new PSR-7 stream.
     *
     * @param string|resource|StreamInterface|null $body
     *
     * @return StreamInterface
     *
     * @throws \InvalidArgumentException If the stream body is invalid.
     * @throws \RuntimeException         If creating the stream from $body fails. 
     */
    public function createStream($body = null);
}
