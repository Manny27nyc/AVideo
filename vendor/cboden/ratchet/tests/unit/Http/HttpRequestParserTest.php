/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Http;

/**
 * @covers Ratchet\Http\HttpRequestParser
 */
class HttpRequestParserTest extends \PHPUnit_Framework_TestCase {
    protected $parser;

    public function setUp() {
        $this->parser = new HttpRequestParser;
    }

    public function headersProvider() {
        return array(
            array(false, "GET / HTTP/1.1\r\nHost: socketo.me\r\n")
          , array(true,  "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\n")
          , array(true, "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\n1")
          , array(true, "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\nHixie✖")
          , array(true,  "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\nHixie✖\r\n\r\n")
          , array(true, "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\nHixie\r\n")
        );
    }

    /**
     * @dataProvider headersProvider
     */
    public function testIsEom($expected, $message) {
        $this->assertEquals($expected, $this->parser->isEom($message));
    }

    public function testBufferOverflowResponse() {
        $conn = $this->getMock('\Ratchet\ConnectionInterface');

        $this->parser->maxSize = 20;

        $this->assertNull($this->parser->onMessage($conn, "GET / HTTP/1.1\r\n"));

        $this->setExpectedException('OverflowException');

        $this->parser->onMessage($conn, "Header-Is: Too Big");
    }

    public function testReturnTypeIsRequest() {
        $conn = $this->getMock('\Ratchet\ConnectionInterface');
        $return = $this->parser->onMessage($conn, "GET / HTTP/1.1\r\nHost: socketo.me\r\n\r\n");

        $this->assertInstanceOf('\Psr\Http\Message\RequestInterface', $return);
    }
}
