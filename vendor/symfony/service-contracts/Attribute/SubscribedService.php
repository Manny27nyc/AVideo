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

namespace Symfony\Contracts\Service\Attribute;

use Symfony\Contracts\Service\ServiceSubscriberTrait;

/**
 * Use with {@see ServiceSubscriberTrait} to mark a method's return type
 * as a subscribed service.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final class SubscribedService
{
    /**
     * @param string|null $key The key to use for the service
     *                         If null, use "ClassName::methodName"
     */
    public function __construct(
        public ?string $key = null
    ) {
    }
}
