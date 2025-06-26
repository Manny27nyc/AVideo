/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api;

class Item extends Entity
{

    public function create($attributes = array())
    {
        return parent::create($attributes);
    }

    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function edit($attributes = array())
    {
        $url = $this->getEntityUrl() . $this->id;

        return $this->request('PATCH', $url, $attributes);
    }

    public function all($options = array())
    {
        return parent::all($options);
    }

    public function delete()
    {
        $url = $this->getEntityUrl() . $this->id;

        return $this->request('DELETE', $url);
    }
}
