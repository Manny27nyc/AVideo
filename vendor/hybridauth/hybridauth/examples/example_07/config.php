/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 *
 * Set the Authorization callback URL to https://path/to/hybridauth/examples/example_07/callback.php
 * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
 */
$config = [
    'callback' => 'https://path/to/hybridauth/examples/example_07/callback.php',
    'providers' => [

        'Google' => [
            'enabled' => true,
            'keys' => [
                'id' => '...',
                'secret' => '...',
            ],
            'scope' => 'email',
        ],

        // 'Yahoo' => ['enabled' => true, 'keys' => ['key' => '...', 'secret' => '...']],
        // 'Facebook' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']],
        // 'Twitter' => ['enabled' => true, 'keys' => ['key' => '...', 'secret' => '...']],
        // 'Instagram' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']],

    ],
];
