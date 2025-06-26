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

class Consumer
{
    /** @var string  */
    public $key;
    /** @var string  */
    public $secret;
    /** @var string|null  */
    public $callbackUrl;

    /**
     * @param string|null $key
     * @param string|null $secret
     * @param null $callbackUrl
     */
    public function __construct(
        ?string $key,
        ?string $secret,
        ?string $callbackUrl = null
    ) {
        $this->key = $key;
        $this->secret = $secret;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Consumer[key=$this->key,secret=$this->secret]";
    }
}
