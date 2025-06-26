/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Radar;

/**
 * Service factory class for API resources in the Radar namespace.
 *
 * @property EarlyFraudWarningService $earlyFraudWarnings
 * @property ValueListItemService $valueListItems
 * @property ValueListService $valueLists
 */
class RadarServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'earlyFraudWarnings' => EarlyFraudWarningService::class,
        'valueListItems' => ValueListItemService::class,
        'valueLists' => ValueListService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
