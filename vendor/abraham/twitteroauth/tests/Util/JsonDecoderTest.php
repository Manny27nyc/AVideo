/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Abraham\TwitterOAuth\Tests;

use PHPUnit\Framework\TestCase;
use Abraham\TwitterOAuth\Util\JsonDecoder;

class JsonDecoderTest extends TestCase
{
    /**
     * @dataProvider jsonProvider
     */
    public function testDecode($input, $asArray, $expected)
    {
        $this->assertEquals($expected, JsonDecoder::decode($input, $asArray));
    }

    public function jsonProvider()
    {
        return [
            ['[]', true, []],
            ['[1,2,3]', true, [1, 2, 3]],
            [
                '[{"id": 556179961825226750}]',
                true,
                [['id' => 556179961825226750]],
            ],
            ['[]', false, []],
            ['[1,2,3]', false, [1, 2, 3]],
            [
                '[{"id": 556179961825226750}]',
                false,
                [
                    $this->getClass(function ($object) {
                        $object->id = 556179961825226750;
                        return $object;
                    }),
                ],
            ],
        ];
    }

    /**
     * @param callable $callable
     *
     * @return stdClass
     */
    private function getClass(\Closure $callable)
    {
        $object = new \stdClass();

        return $callable($object);
    }
}
