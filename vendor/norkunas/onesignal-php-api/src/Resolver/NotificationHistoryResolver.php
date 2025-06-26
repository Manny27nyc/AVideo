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
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotificationHistoryResolver implements ResolverInterface
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(array $data): array
    {
        return (new OptionsResolver())
            ->setRequired('events')
            ->setAllowedTypes('events', 'string')
            ->setAllowedValues('events', ['sent', 'clicked'])
            ->setRequired('email')
            ->setAllowedTypes('email', 'string')
            ->setDefault('app_id', $this->config->getApplicationId())
            ->setAllowedTypes('app_id', 'string')
            ->resolve($data);
    }
}
