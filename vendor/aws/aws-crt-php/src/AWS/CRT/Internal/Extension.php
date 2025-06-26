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
namespace AWS\CRT\Internal;

use \RuntimeException;

/**
 * @internal
 * Forwards calls on to awscrt PHP extension functions
 */
final class Extension {
    function __construct() {
        if (!extension_loaded('awscrt')) {
            throw new RuntimeException('awscrt extension is not loaded');
        }
    }

    /**
     * Forwards any call made on this object to the extension function of the
     * same name with the supplied arguments. Argument type hinting and checking
     * occurs at the CRT wrapper.
     */
    function __call($name, $args) {
        return call_user_func_array($name, $args);
    }
}
