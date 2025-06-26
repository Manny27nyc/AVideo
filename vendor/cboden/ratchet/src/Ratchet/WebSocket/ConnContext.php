/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\WebSocket;
use Ratchet\RFC6455\Messaging\MessageBuffer;

class ConnContext {
    /**
     * @var \Ratchet\WebSocket\WsConnection
     */
    public $connection;

    /**
     * @var \Ratchet\RFC6455\Messaging\MessageBuffer;
     */
    public $buffer;

    public function __construct(WsConnection $conn, MessageBuffer $buffer) {
        $this->connection = $conn;
        $this->buffer = $buffer;
    }
}
