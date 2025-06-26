/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace OneSignal\Resolver;

use OneSignal\Config;

class ResolverFactory
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function createAppResolver(): AppResolver
    {
        return new AppResolver();
    }

    public function createSegmentResolver(): SegmentResolver
    {
        return new SegmentResolver();
    }

    public function createOutcomesResolver(): AppOutcomesResolver
    {
        return new AppOutcomesResolver();
    }

    public function createDeviceSessionResolver(): DeviceSessionResolver
    {
        return new DeviceSessionResolver();
    }

    public function createDevicePurchaseResolver(): DevicePurchaseResolver
    {
        return new DevicePurchaseResolver();
    }

    public function createDeviceFocusResolver(): DeviceFocusResolver
    {
        return new DeviceFocusResolver();
    }

    public function createNewDeviceResolver(): DeviceResolver
    {
        return new DeviceResolver($this->config, true);
    }

    public function createExistingDeviceResolver(): DeviceResolver
    {
        return new DeviceResolver($this->config, false);
    }

    public function createDeviceTagsResolver(): DeviceTagsResolver
    {
        return new DeviceTagsResolver();
    }

    public function createNotificationResolver(): NotificationResolver
    {
        return new NotificationResolver($this->config);
    }

    public function createNotificationHistoryResolver(): NotificationHistoryResolver
    {
        return new NotificationHistoryResolver($this->config);
    }
}
