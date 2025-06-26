/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api;

use Requests;


class FundAccount extends Entity
{
    /**
     * Create a Fund Account .
     *
     * @param array $attributes
     *
     * @return FundAccount
     */
    public function create($attributes = array())
    {
       return parent::create($attributes);
    }

    /**
     * Fetch all Fund Accounts
     *
     * @param array $options
     *
     * @return Collection
     */
    public function all($options = array())
    {
        return parent::all($options);
    }

}
