/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\S3\Crypto;

use Aws\Crypto\MaterialsProviderInterfaceV2;

trait CryptoParamsTraitV2
{
    use CryptoParamsTrait;

    protected function getMaterialsProvider(array $args)
    {
        if ($args['@MaterialsProvider'] instanceof MaterialsProviderInterfaceV2) {
            return $args['@MaterialsProvider'];
        }

        throw new \InvalidArgumentException('An instance of MaterialsProviderInterfaceV2'
            . ' must be passed in the "MaterialsProvider" field.');
    }
}
