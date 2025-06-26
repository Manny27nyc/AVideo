/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Mock;
use Ratchet\ConnectionInterface;

class Connection implements ConnectionInterface {
    public $last = array(
        'send'  => ''
      , 'close' => false
    );

    public $remoteAddress = '127.0.0.1';

    public function send($data) {
        $this->last[__FUNCTION__] = $data;
    }

    public function close() {
        $this->last[__FUNCTION__] = true;
    }
}
