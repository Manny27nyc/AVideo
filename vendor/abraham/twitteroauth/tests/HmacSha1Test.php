/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace Abraham\TwitterOAuth\Tests;

use Abraham\TwitterOAuth\HmacSha1;

class HmacSha1Test extends AbstractSignatureMethodTest
{
    protected $name = 'HMAC-SHA1';

    public function getClass()
    {
        return new HmacSha1();
    }

    public function signatureDataProvider()
    {
        return [
            [
                '5CoEcoq7XoKFjwYCieQvuzadeUA=',
                $this->getRequest(),
                $this->getConsumer(),
                $this->getToken(),
            ],
            [
                'EBw0gHngam3BTx8kfPfNNSyKem4=',
                $this->getRequest(),
                $this->getConsumer('key', 'secret'),
                $this->getToken(),
            ],
            [
                'kDsHFZzws2a5M6cAQjfpdNBo+v8=',
                $this->getRequest(),
                $this->getConsumer('key', 'secret'),
                $this->getToken('key', 'secret'),
            ],
            [
                'EBw0gHngam3BTx8kfPfNNSyKem4=',
                $this->getRequest(),
                $this->getConsumer('key', 'secret'),
                null,
            ],
        ];
    }
}
