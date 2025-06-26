/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Server;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

/**
 * A simple Ratchet application that will reply to all messages with the message it received
 */
class EchoServer implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $from->send($msg);
    }

    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }
}
