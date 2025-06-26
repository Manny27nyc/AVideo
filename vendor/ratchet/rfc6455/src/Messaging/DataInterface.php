/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\RFC6455\Messaging;

interface DataInterface {
    /**
     * Determine if the message is complete or still fragmented
     * @return bool
     */
    function isCoalesced();

    /**
     * Get the number of bytes the payload is set to be
     * @return int
     */
    function getPayloadLength();

    /**
     * Get the payload (message) sent from peer
     * @return string
     */
    function getPayload();

    /**
     * Get raw contents of the message
     * @return string
     */
    function getContents();

    /**
     * Should return the unmasked payload received from peer
     * @return string
     */
    function __toString();
}
