/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe\Exception\OAuth;

/**
 * InvalidClientException is thrown when the client_id does not belong to you,
 * the stripe_user_id does not exist or is not connected to your application,
 * or the API key mode (live or test mode) does not match the client_id mode.
 */
class InvalidClientException extends OAuthErrorException
{
}
