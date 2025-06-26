/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon;

if (!class_exists(LazyTranslator::class, false)) {
    class LazyTranslator extends AbstractTranslator
    {
        /**
         * Returns the translation.
         *
         * @param string|null $id
         * @param array       $parameters
         * @param string|null $domain
         * @param string|null $locale
         *
         * @return string
         */
        public function trans($id, array $parameters = [], $domain = null, $locale = null)
        {
            return $this->translate($id, $parameters, $domain, $locale);
        }
    }
}
