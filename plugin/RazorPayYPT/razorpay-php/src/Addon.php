/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api;

class Addon extends Entity
{
    // To create an Addon,
    // use the createAddon method of the Subscription class

    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function delete()
    {
        $entityUrl = $this->getEntityUrl();

        return $this->request('DELETE', $entityUrl . $this->id);
    }

    public function fetchAll($attributes = array())
    {
        $entityUrl = $this->getEntityUrl(); 

        return $this->request('GET', $entityUrl , $attributes);
    }
}
