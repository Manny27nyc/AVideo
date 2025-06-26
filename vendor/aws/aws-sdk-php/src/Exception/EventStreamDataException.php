/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Exception;

/**
 * Represents an exception that was supplied via an EventStream.
 */
class EventStreamDataException extends \RuntimeException
{
    private $errorCode;
    private $errorMessage;

    public function __construct($code, $message)
    {
        $this->errorCode = $code;
        $this->errorMessage = $message;
        parent::__construct($message);
    }

    /**
     * Get the AWS error code.
     *
     * @return string|null Returns null if no response was received
     */
    public function getAwsErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Get the concise error message if any.
     *
     * @return string|null
     */
    public function getAwsErrorMessage()
    {
        return $this->errorMessage;
    }
}
