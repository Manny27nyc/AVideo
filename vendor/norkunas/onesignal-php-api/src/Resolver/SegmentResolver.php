/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace OneSignal\Resolver;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SegmentResolver implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolve(array $data): array
    {
        return (new OptionsResolver())
            ->setDefined('id')
            ->setAllowedTypes('id', 'string')
            ->setRequired('name')
            ->setAllowedTypes('name', 'string')
            ->setDefined('filters')
            ->setAllowedTypes('filters', 'array')
            ->setNormalizer('filters', function (Options $options, array $values) {
                return $this->normalizeFilters($options, $values);
            })
            ->resolve($data);
    }

    private function normalizeFilters(Options $options, array $values): array
    {
        $filters = [];

        foreach ($values as $filter) {
            if (isset($filter['field']) || isset($filter['operator'])) {
                $filters[] = $filter;
            }
        }

        return $filters;
    }
}
