/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Ratchet\RFC6455\Test\Unit\Handshake;

use Ratchet\RFC6455\Handshake\ResponseVerifier;
use PHPUnit\Framework\TestCase;

/**
 * @covers Ratchet\RFC6455\Handshake\ResponseVerifier
 */
class ResponseVerifierTest extends TestCase {
    /**
     * @var ResponseVerifier
     */
    protected $_v;

    public function setUp() {
        $this->_v = new ResponseVerifier;
    }

    public static function subProtocolsProvider() {
        return [
            [true,  ['a'], ['a']]
          , [true,  ['c', 'd', 'a'], ['a']]
          , [true,  ['c, a', 'd'], ['a']]
          , [true,  [], []]
          , [true,  ['a', 'b'], []]
          , [false, ['c', 'd', 'a'], ['b', 'a']]
          , [false, ['a', 'b', 'c'], ['d']]
        ];
    }

    /**
     * @dataProvider subProtocolsProvider
     */
    public function testVerifySubProtocol($expected, $request, $response) {
        $this->assertEquals($expected, $this->_v->verifySubProtocol($request, $response));
    }
}
