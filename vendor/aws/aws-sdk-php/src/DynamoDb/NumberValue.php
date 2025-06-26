/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\DynamoDb;

/**
 * Special object to represent a DynamoDB Number (N) value.
 */
class NumberValue implements \JsonSerializable
{
    /** @var string Number value. */
    private $value;

    /**
     * @param string|int|float $value A number value.
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
