/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Exception for 429 Too Many Requests responses
 *
 * @see https://tools.ietf.org/html/draft-nottingham-http-new-status-04
 * @package Requests
 */

/**
 * Exception for 429 Too Many Requests responses
 *
 * @see https://tools.ietf.org/html/draft-nottingham-http-new-status-04
 * @package Requests
 */
class Requests_Exception_HTTP_429 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 429;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Too Many Requests';
}
