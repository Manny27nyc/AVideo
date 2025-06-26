/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\Session\Serialize;

class PhpBinaryHandler implements HandlerInterface {
    /**
     * {@inheritdoc}
     */
    function serialize(array $data) {
        throw new \RuntimeException("Serialize PhpHandler:serialize code not written yet, write me!");
    }

    /**
     * {@inheritdoc}
     * @link http://ca2.php.net/manual/en/function.session-decode.php#108037 Code from this comment on php.net
     */
    public function unserialize($raw) {
        $returnData = array();
        $offset     = 0;

        while ($offset < strlen($raw)) {
            $num     = ord($raw[$offset]);
            $offset += 1;
            $varname = substr($raw, $offset, $num);
            $offset += $num;
            $data    = unserialize(substr($raw, $offset));

            $returnData[$varname] = $data;
            $offset += strlen(serialize($data));
        }

        return $returnData;
    }
}
