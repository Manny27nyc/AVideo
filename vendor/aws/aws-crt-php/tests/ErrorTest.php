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
use AWS\CRT\CRT;

final class ErrorTest extends PHPUnit_Framework_TestCase {

    public function testNoInitialError() {
        $this->assertEquals(0, CRT::last_error());
    }

    public function testCanResolveErrorName() {
        $this->assertEquals("AWS_ERROR_SUCCESS", CRT::error_name(0));
    }

    public function testCanResolveErrorStr() {
        $this->assertEquals("Success.", CRT::error_str(0));
    }
}
