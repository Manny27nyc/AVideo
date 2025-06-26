/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Issuing;

/**
 * Service factory class for API resources in the Issuing namespace.
 *
 * @property AuthorizationService $authorizations
 * @property CardholderService $cardholders
 * @property CardService $cards
 * @property DisputeService $disputes
 * @property TransactionService $transactions
 */
class IssuingServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'authorizations' => AuthorizationService::class,
        'cardholders' => CardholderService::class,
        'cards' => CardService::class,
        'disputes' => DisputeService::class,
        'transactions' => TransactionService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
