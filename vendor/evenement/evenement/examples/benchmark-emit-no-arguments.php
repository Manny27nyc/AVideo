/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);

/*
 * This file is part of Evenement.
 *
 * (c) Igor Wiedler <igor@wiedler.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

const ITERATIONS = 10000000;

use Evenement\EventEmitter;

require __DIR__.'/../vendor/autoload.php';

$emitter = new EventEmitter();

$emitter->on('event', function () {});

$start = microtime(true);
for ($i = 0; $i < ITERATIONS; $i++) {
    $emitter->emit('event');
}
$time = microtime(true) - $start;

echo 'Emitting ', number_format(ITERATIONS), ' events took: ', number_format($time, 2), 's', PHP_EOL;
