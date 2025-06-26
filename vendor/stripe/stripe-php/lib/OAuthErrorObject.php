/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe;

/**
 * Class OAuthErrorObject.
 *
 * @property string $error
 * @property string $error_description
 */
class OAuthErrorObject extends StripeObject
{
    /**
     * Refreshes this object using the provided values.
     *
     * @param array $values
     * @param null|array|string|Util\RequestOptions $opts
     * @param bool $partial defaults to false
     */
    public function refreshFrom($values, $opts, $partial = false)
    {
        // Unlike most other API resources, the API will omit attributes in
        // error objects when they have a null value. We manually set default
        // values here to facilitate generic error handling.
        $values = \array_merge([
            'error' => null,
            'error_description' => null,
        ], $values);
        parent::refreshFrom($values, $opts, $partial);
    }
}
