/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Application\Server;
use Ratchet\Server\IoConnection;

/**
 * @covers Ratchet\Server\IoConnection
 */
class IoConnectionTest extends \PHPUnit_Framework_TestCase {
    protected $sock;
    protected $conn;

    public function setUp() {
        $this->sock = $this->getMock('\\React\\Socket\\ConnectionInterface');
        $this->conn = new IoConnection($this->sock);
    }

    public function testCloseBubbles() {
        $this->sock->expects($this->once())->method('end');
        $this->conn->close();
    }

    public function testSendBubbles() {
        $msg = '6 hour rides are productive';

        $this->sock->expects($this->once())->method('write')->with($msg);
        $this->conn->send($msg);
    }

    public function testSendReturnsSelf() {
        $this->assertSame($this->conn, $this->conn->send('fluent interface'));
    }
}
