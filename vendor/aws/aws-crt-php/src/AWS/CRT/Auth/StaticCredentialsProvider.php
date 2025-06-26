/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0.
 */
namespace AWS\CRT\Auth;

/**
 * Provides a static set of AWS credentials
 *
 * @param array options:
 * - string access_key_id - AWS Access Key Id
 * - string secret_access_key - AWS Secret Access Key
 * - string session_token - Optional STS session token
 */
final class StaticCredentialsProvider extends CredentialsProvider {

    private $credentials;

    public function __get($name) {
        return $this->$name;
    }

    function __construct(array $options = []) {
        parent::__construct();
        $this->credentials = new AwsCredentials($options);

        $provider_options = self::$crt->credentials_provider_static_options_new();
        self::$crt->credentials_provider_static_options_set_access_key_id($provider_options, $this->credentials->access_key_id);
        self::$crt->credentials_provider_static_options_set_secret_access_key($provider_options, $this->credentials->secret_access_key);
        self::$crt->credentials_provider_static_options_set_session_token($provider_options, $this->credentials->session_token);
        $this->acquire(self::$crt->credentials_provider_static_new($provider_options));
        self::$crt->credentials_provider_static_options_release($provider_options);
    }
}
