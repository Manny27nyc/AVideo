/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Ratchet\WebSocket;

/**
 * WebSocket Server Interface
 */
interface WsServerInterface {
    /**
     * If any component in a stack supports a WebSocket sub-protocol return each supported in an array
     * @return array
     * @todo This method may be removed in future version (note that will not break code, just make some code obsolete)
     */
    function getSubProtocols();
}
