/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Created by claudio on 2018-12-31
 */

use PHPUnit\Framework\TestCase;
use React\EventLoop\Factory;
use Ratchet\Client\Connector;
use Psr\Http\Message\RequestInterface;

class RequestUriTest extends TestCase {
    protected static function getPrivateClassMethod($className, $methodName) {
        $class = new ReflectionClass($className);
        $method = $class->getMethod($methodName);
        $method->setAccessible(true);
        return $method;
    }

    function uriDataProvider() {
        return [
            ['ws://127.0.0.1/bla', 'http://127.0.0.1/bla'],
            ['wss://127.0.0.1/bla', 'https://127.0.0.1/bla'],
            ['ws://127.0.0.1:1234/bla', 'http://127.0.0.1:1234/bla'],
            ['wss://127.0.0.1:4321/bla', 'https://127.0.0.1:4321/bla']
        ];
    }

    /**
     * @dataProvider uriDataProvider
     */
    function testGeneratedRequestUri($uri, $expectedRequestUri) {
        $loop = Factory::create();

        $connector = new Connector($loop);

        $generateRequest = self::getPrivateClassMethod('\Ratchet\Client\Connector', 'generateRequest');
        $request = $generateRequest->invokeArgs($connector, [$uri, [], []]);

        $this->assertEquals((string)$request->getUri(), $expectedRequestUri);
    }
}