/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Http;
use Ratchet\ConnectionInterface;
use Psr\Http\Message\RequestInterface;

class NoOpHttpServerController implements HttpServerInterface {
    public function onOpen(ConnectionInterface $conn, RequestInterface $request = null) {
    }

    public function onMessage(ConnectionInterface $from, $msg) {
    }

    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
    }
}
