/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe;

/**
 * Class OrderItem.
 *
 * @property string $object
 * @property int $amount
 * @property string $currency
 * @property string $description
 * @property string $parent
 * @property int $quantity
 * @property string $type
 */
class OrderItem extends StripeObject
{
    const OBJECT_NAME = 'order_item';
}
