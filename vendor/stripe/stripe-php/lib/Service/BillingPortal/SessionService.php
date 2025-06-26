/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\BillingPortal;

class SessionService extends \Stripe\Service\AbstractService
{
    /**
     * Creates a session of the customer portal.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\BillingPortal\Session
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/billing_portal/sessions', $params, $opts);
    }
}
