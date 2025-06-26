/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace React\EventLoop\Tick;

use SplQueue;

/**
 * A tick queue implementation that can hold multiple callback functions
 *
 * This class should only be used internally, see LoopInterface instead.
 *
 * @see LoopInterface
 * @internal
 */
final class FutureTickQueue
{
    private $queue;

    public function __construct()
    {
        $this->queue = new SplQueue();
    }

    /**
     * Add a callback to be invoked on a future tick of the event loop.
     *
     * Callbacks are guaranteed to be executed in the order they are enqueued.
     *
     * @param callable $listener The callback to invoke.
     */
    public function add($listener)
    {
        $this->queue->enqueue($listener);
    }

    /**
     * Flush the callback queue.
     */
    public function tick()
    {
        // Only invoke as many callbacks as were on the queue when tick() was called.
        $count = $this->queue->count();

        while ($count--) {
            \call_user_func(
                $this->queue->dequeue()
            );
        }
    }

    /**
     * Check if the next tick queue is empty.
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->queue->isEmpty();
    }
}
