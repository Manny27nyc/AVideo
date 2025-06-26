/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * The MIT License
 * Copyright (c) 2007 Andy Smith
 */

declare(strict_types=1);

namespace Abraham\TwitterOAuth;

class Token
{
    /** @var string */
    public $key;
    /** @var string */
    public $secret;

    /**
     * @param string $key    The OAuth Token
     * @param string $secret The OAuth Token Secret
     */
    public function __construct(?string $key, ?string $secret)
    {
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
     * Generates the basic string serialization of a token that a server
     * would respond to request_token and access_token calls with
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'oauth_token=%s&oauth_token_secret=%s',
            Util::urlencodeRfc3986($this->key),
            Util::urlencodeRfc3986($this->secret)
        );
    }
}
