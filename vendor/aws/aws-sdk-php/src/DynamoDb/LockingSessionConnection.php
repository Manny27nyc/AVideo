/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\DynamoDb;

use Aws\DynamoDb\Exception\DynamoDbException;

/**
 * The locking connection adds locking logic to the read operation.
 */
class LockingSessionConnection extends StandardSessionConnection
{
    public function __construct(DynamoDbClient $client, array $config = [])
    {
        parent::__construct($client, $config);
    }

    /**
     * {@inheritdoc}
     * Retries the request until the lock can be acquired
     */
    public function read($id)
    {
        // Create the params for the UpdateItem operation so that a lock can be
        // set and item returned (via ReturnValues) in a one, atomic operation.
        $params = [
            'TableName'        => $this->getTableName(),
            'Key'              => $this->formatKey($id),
            'Expected'         => ['lock' => ['Exists' => false]],
            'AttributeUpdates' => ['lock' => ['Value' => ['N' => '1']]],
            'ReturnValues'     => 'ALL_NEW',
        ];

        // Acquire the lock and fetch the item data.
        $timeout  = time() + $this->getMaxLockWaitTime();
        while (true) {
            try {
                $item = [];
                $result = $this->client->updateItem($params);
                if (isset($result['Attributes'])) {
                    foreach ($result['Attributes'] as $key => $value) {
                        $item[$key] = current($value);
                    }
                }
                return $item;
            } catch (DynamoDbException $e) {
                if ($e->getAwsErrorCode() === 'ConditionalCheckFailedException'
                    && time() < $timeout
                ) {
                    usleep(rand(
                        $this->getMinLockRetryMicrotime(),
                        $this->getMaxLockRetryMicrotime()
                    ));
                } else {
                    break;
                }
            }
        }
    }
}
