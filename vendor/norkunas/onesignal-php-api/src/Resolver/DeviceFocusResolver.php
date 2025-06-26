/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace OneSignal\Resolver;

use Symfony\Component\OptionsResolver\OptionsResolver;

class DeviceFocusResolver implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolve(array $data): array
    {
        return (new OptionsResolver())
            ->setDefault('state', 'ping')
            ->setAllowedTypes('state', 'string')
            ->setRequired('active_time')
            ->setAllowedTypes('active_time', 'int')
            ->resolve($data);
    }
}
