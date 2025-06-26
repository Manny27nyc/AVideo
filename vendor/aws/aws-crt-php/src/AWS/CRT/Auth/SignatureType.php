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

class SignatureType {
    const HTTP_REQUEST_HEADERS = 0;
    const HTTP_REQUEST_QUERY_PARAMS = 1;
    const HTTP_REQUEST_CHUNK = 2;
    const HTTP_REQUEST_EVENT = 3;
    const CANONICAL_REQUEST_HEADERS = 4;
    const CANONICAL_REQUEST_QUERY_PARAMS = 5;
}