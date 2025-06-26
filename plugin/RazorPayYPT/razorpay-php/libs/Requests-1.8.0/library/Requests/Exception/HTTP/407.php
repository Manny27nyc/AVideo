/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests
 */

/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_407 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 407;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Proxy Authentication Required';
}
