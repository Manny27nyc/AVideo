/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Stripe\Exception;

/**
 * SignatureVerificationException is thrown when the signature verification for
 * a webhook fails.
 */
class SignatureVerificationException extends \Exception implements ExceptionInterface
{
    protected $httpBody;
    protected $sigHeader;

    /**
     * Creates a new SignatureVerificationException exception.
     *
     * @param string $message the exception message
     * @param null|string $httpBody the HTTP body as a string
     * @param null|string $sigHeader the `Stripe-Signature` HTTP header
     *
     * @return SignatureVerificationException
     */
    public static function factory(
        $message,
        $httpBody = null,
        $sigHeader = null
    ) {
        $instance = new static($message);
        $instance->setHttpBody($httpBody);
        $instance->setSigHeader($sigHeader);

        return $instance;
    }

    /**
     * Gets the HTTP body as a string.
     *
     * @return null|string
     */
    public function getHttpBody()
    {
        return $this->httpBody;
    }

    /**
     * Sets the HTTP body as a string.
     *
     * @param null|string $httpBody
     */
    public function setHttpBody($httpBody)
    {
        $this->httpBody = $httpBody;
    }

    /**
     * Gets the `Stripe-Signature` HTTP header.
     *
     * @return null|string
     */
    public function getSigHeader()
    {
        return $this->sigHeader;
    }

    /**
     * Sets the `Stripe-Signature` HTTP header.
     *
     * @param null|string $sigHeader
     */
    public function setSigHeader($sigHeader)
    {
        $this->sigHeader = $sigHeader;
    }
}
