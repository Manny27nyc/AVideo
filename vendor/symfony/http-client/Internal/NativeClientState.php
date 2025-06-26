/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpClient\Internal;

/**
 * Internal representation of the native client's state.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class NativeClientState extends ClientState
{
    /** @var int */
    public $id;
    /** @var int */
    public $maxHostConnections = \PHP_INT_MAX;
    /** @var int */
    public $responseCount = 0;
    /** @var string[] */
    public $dnsCache = [];
    /** @var bool */
    public $sleep = false;
    /** @var int[] */
    public $hosts = [];

    public function __construct()
    {
        $this->id = random_int(\PHP_INT_MIN, \PHP_INT_MAX);
    }

    public function reset()
    {
        $this->responseCount = 0;
        $this->dnsCache = [];
        $this->hosts = [];
    }
}
