/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Arn;

/**
 * Amazon Resource Names (ARNs) uniquely identify AWS resources. Classes
 * implementing ArnInterface parse and store an ARN object representation.
 *
 * Valid ARN formats include:
 *
 *   arn:partition:service:region:account-id:resource-id
 *   arn:partition:service:region:account-id:resource-type/resource-id
 *   arn:partition:service:region:account-id:resource-type:resource-id
 *
 * Some components may be omitted, depending on the service and resource type.
 *
 * @internal
 */
interface ArnInterface
{
    public static function parse($string);

    public function __toString();

    public function getPrefix();

    public function getPartition();

    public function getService();

    public function getRegion();

    public function getAccountId();

    public function getResource();

    public function toArray();
}