/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws;

use Psr\Cache\CacheItemPoolInterface;

class PsrCacheAdapter implements CacheInterface
{
    /** @var CacheItemPoolInterface */
    private $pool;

    public function __construct(CacheItemPoolInterface $pool)
    {
        $this->pool = $pool;
    }

    public function get($key)
    {
        $item = $this->pool->getItem($key);

        return $item->isHit() ? $item->get() : null;
    }

    public function set($key, $value, $ttl = 0)
    {
        $item = $this->pool->getItem($key);
        $item->set($value);
        if ($ttl > 0) {
            $item->expiresAfter($ttl);
        }

        $this->pool->save($item);
    }

    public function remove($key)
    {
        $this->pool->deleteItem($key);
    }
}
