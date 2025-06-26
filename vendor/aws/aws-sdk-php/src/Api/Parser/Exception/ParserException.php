/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Api\Parser\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use Aws\ResponseContainerInterface;
use Psr\Http\Message\ResponseInterface;

class ParserException extends \RuntimeException implements
    MonitoringEventsInterface,
    ResponseContainerInterface
{
    use HasMonitoringEventsTrait;

    private $errorCode;
    private $requestId;
    private $response;

    public function __construct($message = '', $code = 0, $previous = null, array $context = [])
    {
        $this->errorCode = isset($context['error_code']) ? $context['error_code'] : null;
        $this->requestId = isset($context['request_id']) ? $context['request_id'] : null;
        $this->response = isset($context['response']) ? $context['response'] : null;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the error code, if any.
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Get the request ID, if any.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
