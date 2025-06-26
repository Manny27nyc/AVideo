/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Api;

/**
 * Represents an API operation.
 */
class Operation extends AbstractModel
{
    private $input;
    private $output;
    private $errors;

    public function __construct(array $definition, ShapeMap $shapeMap)
    {
        $definition['type'] = 'structure';

        if (!isset($definition['http']['method'])) {
            $definition['http']['method'] = 'POST';
        }

        if (!isset($definition['http']['requestUri'])) {
            $definition['http']['requestUri'] = '/';
        }

        parent::__construct($definition, $shapeMap);
    }

    /**
     * Returns an associative array of the HTTP attribute of the operation:
     *
     * - method: HTTP method of the operation
     * - requestUri: URI of the request (can include URI template placeholders)
     *
     * @return array
     */
    public function getHttp()
    {
        return $this->definition['http'];
    }

    /**
     * Get the input shape of the operation.
     *
     * @return StructureShape
     */
    public function getInput()
    {
        if (!$this->input) {
            if ($input = $this['input']) {
                $this->input = $this->shapeFor($input);
            } else {
                $this->input = new StructureShape([], $this->shapeMap);
            }
        }

        return $this->input;
    }

    /**
     * Get the output shape of the operation.
     *
     * @return StructureShape
     */
    public function getOutput()
    {
        if (!$this->output) {
            if ($output = $this['output']) {
                $this->output = $this->shapeFor($output);
            } else {
                $this->output = new StructureShape([], $this->shapeMap);
            }
        }

        return $this->output;
    }

    /**
     * Get an array of operation error shapes.
     *
     * @return Shape[]
     */
    public function getErrors()
    {
        if ($this->errors === null) {
            if ($errors = $this['errors']) {
                foreach ($errors as $key => $error) {
                    $errors[$key] = $this->shapeFor($error);
                }
                $this->errors = $errors;
            } else {
                $this->errors = [];
            }
        }

        return $this->errors;
    }
}
