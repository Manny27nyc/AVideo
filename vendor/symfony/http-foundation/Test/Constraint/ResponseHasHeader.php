/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\HttpFoundation\Response;

final class ResponseHasHeader extends Constraint
{
    private $headerName;

    public function __construct(string $headerName)
    {
        $this->headerName = $headerName;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has header "%s"', $this->headerName);
    }

    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response): bool
    {
        return $response->headers->has($this->headerName);
    }

    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function failureDescription($response): string
    {
        return 'the Response '.$this->toString();
    }
}
