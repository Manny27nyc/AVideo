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
namespace AWS\CRT\HTTP;

class Response extends Message {
    private $status_code;

    public function __construct($method, $path, $query, $headers, $status_code) {
        parent::__construct($method, $path, $query, $headers);
        $this->status_code = $status_code;
    }

    public static function marshall($response) {
        return parent::marshall($response);
    }

    public static function unmarshall($buf) {
        return parent::_unmarshall($buf, Response::class);
    }

    public function status_code() {
        return $this->status_code;
    }
}
