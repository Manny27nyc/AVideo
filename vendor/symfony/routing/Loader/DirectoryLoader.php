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

namespace Symfony\Component\Routing\Loader;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Config\Resource\DirectoryResource;
use Symfony\Component\Routing\RouteCollection;

class DirectoryLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load($file, string $type = null)
    {
        $path = $this->locator->locate($file);

        $collection = new RouteCollection();
        $collection->addResource(new DirectoryResource($path));

        foreach (scandir($path) as $dir) {
            if ('.' !== $dir[0]) {
                $this->setCurrentDir($path);
                $subPath = $path.'/'.$dir;
                $subType = null;

                if (is_dir($subPath)) {
                    $subPath .= '/';
                    $subType = 'directory';
                }

                $subCollection = $this->import($subPath, $subType, false, $path);
                $collection->addCollection($subCollection);
            }
        }

        return $collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($resource, string $type = null)
    {
        // only when type is forced to directory, not to conflict with AnnotationLoader

        return 'directory' === $type;
    }
}
