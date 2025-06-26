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

namespace Symfony\Component\Translation\Exception;

/**
 * @author Oskar Stark <oskarstark@googlemail.com>
 */
class MissingRequiredOptionException extends IncompleteDsnException
{
    public function __construct(string $option, string $dsn = null, \Throwable $previous = null)
    {
        $message = sprintf('The option "%s" is required but missing.', $option);

        parent::__construct($message, $dsn, $previous);
    }
}
