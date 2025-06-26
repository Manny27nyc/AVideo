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

class DeviceTagsResolver implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolve(array $data): array
    {
        return (new OptionsResolver())
            ->setDefined('tags')
            ->setAllowedTypes('tags', 'array')
            ->setRequired(['tags'])
            ->resolve($data);
    }
}
