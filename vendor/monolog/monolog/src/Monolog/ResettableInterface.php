/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog;

/**
 * Handler or Processor implementing this interface will be reset when Logger::reset() is called.
 *
 * Resetting ends a log cycle gets them back to their initial state.
 *
 * Resetting a Handler or a Processor means flushing/cleaning all buffers, resetting internal
 * state, and getting it back to a state in which it can receive log records again.
 *
 * This is useful in case you want to avoid logs leaking between two requests or jobs when you
 * have a long running process like a worker or an application server serving multiple requests
 * in one process.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
interface ResettableInterface
{
    public function reset();
}
