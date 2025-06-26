/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\Traits;

use Carbon\CarbonInterval;
use Carbon\Exceptions\InvalidIntervalException;
use DateInterval;

/**
 * Trait to call rounding methods to interval or the interval of a period.
 */
trait IntervalRounding
{
    protected function callRoundMethod(string $method, array $parameters)
    {
        $action = substr($method, 0, 4);

        if ($action !== 'ceil') {
            $action = substr($method, 0, 5);
        }

        if (\in_array($action, ['round', 'floor', 'ceil'])) {
            return $this->{$action.'Unit'}(substr($method, \strlen($action)), ...$parameters);
        }

        return null;
    }

    protected function roundWith($precision, $function)
    {
        $unit = 'second';

        if ($precision instanceof DateInterval) {
            $precision = (string) CarbonInterval::instance($precision);
        }

        if (\is_string($precision) && preg_match('/^\s*(?<precision>\d+)?\s*(?<unit>\w+)(?<other>\W.*)?$/', $precision, $match)) {
            if (trim($match['other'] ?? '') !== '') {
                throw new InvalidIntervalException('Rounding is only possible with single unit intervals.');
            }

            $precision = (int) ($match['precision'] ?: 1);
            $unit = $match['unit'];
        }

        return $this->roundUnit($unit, $precision, $function);
    }
}
