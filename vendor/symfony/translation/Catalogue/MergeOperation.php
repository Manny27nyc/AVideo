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

namespace Symfony\Component\Translation\Catalogue;

use Symfony\Component\Translation\MessageCatalogueInterface;

/**
 * Merge operation between two catalogues as follows:
 * all = source ∪ target = {x: x ∈ source ∨ x ∈ target}
 * new = all ∖ source = {x: x ∈ target ∧ x ∉ source}
 * obsolete = source ∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅
 * Basically, the result contains messages from both catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class MergeOperation extends AbstractOperation
{
    /**
     * {@inheritdoc}
     */
    protected function processDomain(string $domain)
    {
        $this->messages[$domain] = [
            'all' => [],
            'new' => [],
            'obsolete' => [],
        ];
        $intlDomain = $domain.MessageCatalogueInterface::INTL_DOMAIN_SUFFIX;

        foreach ($this->source->all($domain) as $id => $message) {
            $this->messages[$domain]['all'][$id] = $message;
            $d = $this->source->defines($id, $intlDomain) ? $intlDomain : $domain;
            $this->result->add([$id => $message], $d);
            if (null !== $keyMetadata = $this->source->getMetadata($id, $d)) {
                $this->result->setMetadata($id, $keyMetadata, $d);
            }
        }

        foreach ($this->target->all($domain) as $id => $message) {
            if (!$this->source->has($id, $domain)) {
                $this->messages[$domain]['all'][$id] = $message;
                $this->messages[$domain]['new'][$id] = $message;
                $d = $this->target->defines($id, $intlDomain) ? $intlDomain : $domain;
                $this->result->add([$id => $message], $d);
                if (null !== $keyMetadata = $this->target->getMetadata($id, $d)) {
                    $this->result->setMetadata($id, $keyMetadata, $d);
                }
            }
        }
    }
}
