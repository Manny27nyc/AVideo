/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require 'vars.php';
require 'mocks.php';

\VCR\VCR::configure()->setStorage('json');
\VCR\VCR::turnOn();
