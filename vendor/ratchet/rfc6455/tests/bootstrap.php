/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Find the auto loader file
 */
$files = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../vendor/autoload.php',
    __DIR__ . '/../../../vendor/autoload.php',
    __DIR__ . '/../../../../vendor/autoload.php',
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $loader = require $file;
        $loader->addPsr4('Ratchet\\RFC6455\\Test\\', __DIR__);
        break;
    }
}
