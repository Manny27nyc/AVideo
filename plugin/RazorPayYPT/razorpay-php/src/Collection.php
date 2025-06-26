/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Razorpay\Api;

use Countable;

class Collection extends Entity implements Countable
{
    public function count()
    {
        $count = 0;

        if (isset($this->attributes['count']))
        {
            return $this->attributes['count'];
        }

        return $count;
    }
}
