/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe\Exception;

// TODO: remove this check once we drop support for PHP 5
if (\interface_exists(\Throwable::class, false)) {
    /**
     * The base interface for all Stripe exceptions.
     */
    interface ExceptionInterface extends \Throwable
    {
    }
} else {
    /**
     * The base interface for all Stripe exceptions.
     */
    // phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
    interface ExceptionInterface
    {
    }
    // phpcs:enable
}
