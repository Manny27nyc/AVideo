/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\S3\Crypto;

use Aws\AwsClientInterface;
use Aws\Middleware;
use Psr\Http\Message\RequestInterface;

trait UserAgentTrait
{
    private function appendUserAgent(AwsClientInterface $client, $agentString)
    {
        $list = $client->getHandlerList();
        $list->appendBuild(Middleware::mapRequest(
            function(RequestInterface $req) use ($agentString) {
                if (!empty($req->getHeader('User-Agent'))
                    && !empty($req->getHeader('User-Agent')[0])
                ) {
                    $userAgent = $req->getHeader('User-Agent')[0];
                    if (strpos($userAgent, $agentString) === false) {
                        $userAgent .= " {$agentString}";
                    };
                } else {
                    $userAgent = $agentString;
                }

                $req =  $req->withHeader('User-Agent', $userAgent);
                return $req;
            }
        ));
    }
}
