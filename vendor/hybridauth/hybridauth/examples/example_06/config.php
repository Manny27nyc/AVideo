/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 */

$config = [
    /**
     * Set the Authorization callback URL to https://path/to/hybridauth/examples/example_06/callback.php.
     * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
     */
    'callback' => 'https://path/to/hybridauth/examples/example_06/callback.php',
    'providers' => [
        'Twitter' => [
            'enabled' => true,
            'keys' => [
                'key' => '...',
                'secret' => '...',
            ],
        ],
        'LinkedIn' => [
            'enabled' => true,
            'keys' => [
                'id' => '...',
                'secret' => '...',
            ],
        ],
        'Facebook' => [
            'enabled' => true,
            'keys' => [
                'id' => '...',
                'secret' => '...',
            ],
        ],
    ],
];
