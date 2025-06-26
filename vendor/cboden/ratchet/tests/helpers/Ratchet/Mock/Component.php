/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Mock;
use Ratchet\MessageComponentInterface;
use Ratchet\WebSocket\WsServerInterface;
use Ratchet\ConnectionInterface;

class Component implements MessageComponentInterface, WsServerInterface {
    public $last = array();

    public $protocols = array();

    public function __construct(ComponentInterface $app = null) {
        $this->last[__FUNCTION__] = func_get_args();
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->last[__FUNCTION__] = func_get_args();
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $this->last[__FUNCTION__] = func_get_args();
    }

    public function onClose(ConnectionInterface $conn) {
        $this->last[__FUNCTION__] = func_get_args();
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $this->last[__FUNCTION__] = func_get_args();
    }

    public function getSubProtocols() {
        return $this->protocols;
    }
}
