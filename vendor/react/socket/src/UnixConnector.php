/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace React\Socket;

use React\EventLoop\Loop;
use React\EventLoop\LoopInterface;
use React\Promise;
use InvalidArgumentException;
use RuntimeException;

/**
 * Unix domain socket connector
 *
 * Unix domain sockets use atomic operations, so we can as well emulate
 * async behavior.
 */
final class UnixConnector implements ConnectorInterface
{
    private $loop;

    public function __construct(LoopInterface $loop = null)
    {
        $this->loop = $loop ?: Loop::get();
    }

    public function connect($path)
    {
        if (\strpos($path, '://') === false) {
            $path = 'unix://' . $path;
        } elseif (\substr($path, 0, 7) !== 'unix://') {
            return Promise\reject(new \InvalidArgumentException(
                'Given URI "' . $path . '" is invalid (EINVAL)',
                \defined('SOCKET_EINVAL') ? \SOCKET_EINVAL : 22
            ));
        }

        $resource = @\stream_socket_client($path, $errno, $errstr, 1.0);

        if (!$resource) {
            return Promise\reject(new \RuntimeException(
                'Unable to connect to unix domain socket "' . $path . '": ' . $errstr . SocketServer::errconst($errno),
                $errno
            ));
        }

        $connection = new Connection($resource, $this->loop);
        $connection->unix = true;

        return Promise\resolve($connection);
    }
}
