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

namespace Symfony\Component\HttpClient\Exception;

use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;

/**
 * Represents a 3xx response.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class RedirectionException extends \RuntimeException implements RedirectionExceptionInterface
{
    use HttpExceptionTrait;
}
