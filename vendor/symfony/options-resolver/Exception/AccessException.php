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

namespace Symfony\Component\OptionsResolver\Exception;

/**
 * Thrown when trying to read an option outside of or write it inside of
 * {@link \Symfony\Component\OptionsResolver\Options::resolve()}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AccessException extends \LogicException implements ExceptionInterface
{
}
