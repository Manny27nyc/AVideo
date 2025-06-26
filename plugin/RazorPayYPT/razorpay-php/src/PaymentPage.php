/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api;

class PaymentPage extends Entity
{

    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function all($options = array())
    {
        return parent::all($options);
    }

    public function activate($id)
    {
        $relativeUrl = $this->getEntityUrl() . $id . '/activate';

        return $this->request('PATCH', $relativeUrl);
    }

    public function deactivate($id)
    {
        $relativeUrl = $this->getEntityUrl() . $id . '/deactivate';

        return $this->request('PATCH', $relativeUrl);
    }
}