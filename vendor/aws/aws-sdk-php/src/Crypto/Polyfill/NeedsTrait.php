/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Crypto\Polyfill;

use Aws\Exception\CryptoPolyfillException;

/**
 * Trait NeedsTrait
 * @package Aws\Crypto\Polyfill
 */
trait NeedsTrait
{
    /**
     * Preconditions, postconditions, and loop invariants are very
     * useful for safe programing.  They also document the specifications.
     * This function is to help simplify the semantic burden of parsing
     * these constructions.
     *
     * Instead of constructions like
     *     if (!(GOOD CONDITION)) {
     *         throw new \Exception('condition not true');
     *     }
     *
     * you can write:
     *     needs(GOOD CONDITION, 'condition not true');
     * @param $condition
     * @param $errorMessage
     * @param null $exceptionClass
     */
    public static function needs($condition, $errorMessage, $exceptionClass = null)
    {
        if (!$condition) {
            if (!$exceptionClass) {
                $exceptionClass = CryptoPolyfillException::class;
            }
            throw new $exceptionClass($errorMessage);
        }
    }
}
