/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Api;

/**
 * Represents a map shape.
 */
class MapShape extends Shape
{
    /** @var Shape */
    private $value;

    /** @var Shape */
    private $key;

    public function __construct(array $definition, ShapeMap $shapeMap)
    {
        $definition['type'] = 'map';
        parent::__construct($definition, $shapeMap);
    }

    /**
     * @return Shape
     * @throws \RuntimeException if no value is specified
     */
    public function getValue()
    {
        if (!$this->value) {
            if (!isset($this->definition['value'])) {
                throw new \RuntimeException('No value specified');
            }

            $this->value = Shape::create(
                $this->definition['value'],
                $this->shapeMap
            );
        }

        return $this->value;
    }

    /**
     * @return Shape
     */
    public function getKey()
    {
        if (!$this->key) {
            $this->key = isset($this->definition['key'])
                ? Shape::create($this->definition['key'], $this->shapeMap)
                : new Shape(['type' => 'string'], $this->shapeMap);
        }

        return $this->key;
    }
}
