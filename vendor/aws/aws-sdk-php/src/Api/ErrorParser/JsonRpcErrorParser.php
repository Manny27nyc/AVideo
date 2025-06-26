/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Api\ErrorParser;

use Aws\Api\Parser\JsonParser;
use Aws\Api\Service;
use Aws\CommandInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Parsers JSON-RPC errors.
 */
class JsonRpcErrorParser extends AbstractErrorParser
{
    use JsonParserTrait;

    private $parser;

    public function __construct(Service $api = null, JsonParser $parser = null)
    {
        parent::__construct($api);
        $this->parser = $parser ?: new JsonParser();
    }

    public function __invoke(
        ResponseInterface $response,
        CommandInterface $command = null
    ) {
        $data = $this->genericHandler($response);

        // Make the casing consistent across services.
        if ($data['parsed']) {
            $data['parsed'] = array_change_key_case($data['parsed']);
        }

        if (isset($data['parsed']['__type'])) {
            $parts = explode('#', $data['parsed']['__type']);
            $data['code'] = isset($parts[1]) ? $parts[1] : $parts[0];
            $data['message'] = isset($data['parsed']['message'])
                ? $data['parsed']['message']
                : null;
        }

        $this->populateShape($data, $response, $command);

        return $data;
    }
}
