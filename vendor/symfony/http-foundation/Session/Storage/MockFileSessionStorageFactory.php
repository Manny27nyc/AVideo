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

namespace Symfony\Component\HttpFoundation\Session\Storage;

use Symfony\Component\HttpFoundation\Request;

// Help opcache.preload discover always-needed symbols
class_exists(MockFileSessionStorage::class);

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class MockFileSessionStorageFactory implements SessionStorageFactoryInterface
{
    private $savePath;
    private $name;
    private $metaBag;

    /**
     * @see MockFileSessionStorage constructor.
     */
    public function __construct(string $savePath = null, string $name = 'MOCKSESSID', MetadataBag $metaBag = null)
    {
        $this->savePath = $savePath;
        $this->name = $name;
        $this->metaBag = $metaBag;
    }

    public function createStorage(?Request $request): SessionStorageInterface
    {
        return new MockFileSessionStorage($this->savePath, $this->name, $this->metaBag);
    }
}
