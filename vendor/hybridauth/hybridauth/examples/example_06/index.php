/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Build a simple HTML page with multiple providers.
 */

include 'vendor/autoload.php';
include 'config.php';

use Hybridauth\Hybridauth;

$hybridauth = new Hybridauth($config);
$adapters = $hybridauth->getConnectedAdapters();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example 06</title>
</head>
<body>
<h1>Sign in</h1>

<ul>
    <?php foreach ($hybridauth->getProviders() as $name) : ?>
        <?php if (!isset($adapters[$name])) : ?>
            <li>
                <a href="<?php print $config['callback'] . "?provider={$name}"; ?>">
                    Sign in with <strong><?php print $name; ?></strong>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php if ($adapters) : ?>
    <h1>You are logged in:</h1>
    <ul>
        <?php foreach ($adapters as $name => $adapter) : ?>
            <li>
                <strong><?php print $adapter->getUserProfile()->displayName; ?></strong> from
                <i><?php print $name; ?></i>
                <span>(<a href="<?php print $config['callback'] . "?logout={$name}"; ?>">Log Out</a>)</span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>
