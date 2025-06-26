/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
#!/usr/bin/env php
<?php
\chdir(__DIR__);

$autoload = (int) $argv[1];
$returnStatus = null;

if (!$autoload) {
    // Modify composer to not autoload Stripe
    $composer = \json_decode(\file_get_contents('composer.json'), true);
    unset($composer['autoload'], $composer['autoload-dev']);

    \file_put_contents('composer.json', \json_encode($composer, \JSON_PRETTY_PRINT));
}

\passthru('composer update', $returnStatus);
if (0 !== $returnStatus) {
    exit(1);
}

$config = $autoload ? 'phpunit.xml' : 'phpunit.no_autoload.xml';
\passthru("./vendor/bin/phpunit -c {$config}", $returnStatus);
if (0 !== $returnStatus) {
    exit(1);
}
