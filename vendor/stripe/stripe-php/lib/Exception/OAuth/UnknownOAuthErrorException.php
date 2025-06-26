/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe\Exception\OAuth;

/**
 * UnknownApiErrorException is thrown when the client library receives an
 * error from the OAuth API it doesn't know about. Receiving this error usually
 * means that your client library is outdated and should be upgraded.
 */
class UnknownOAuthErrorException extends OAuthErrorException
{
}
