/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace Abraham\TwitterOAuth\Tests;

use PHPUnit\Framework\TestCase;
use Abraham\TwitterOAuth\Token;

class TokenTest extends TestCase
{
    /**
     * @dataProvider tokenProvider
     */
    public function testToString($expected, $key, $secret)
    {
        $token = new Token($key, $secret);

        $this->assertEquals($expected, $token->__toString());
    }

    public function tokenProvider()
    {
        return [
            ['oauth_token=key&oauth_token_secret=secret', 'key', 'secret'],
            [
                'oauth_token=key%2Bkey&oauth_token_secret=secret',
                'key+key',
                'secret',
            ],
            [
                'oauth_token=key~key&oauth_token_secret=secret',
                'key~key',
                'secret',
            ],
        ];
    }
}
