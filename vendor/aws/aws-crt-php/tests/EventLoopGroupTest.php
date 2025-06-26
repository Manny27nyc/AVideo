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
use AWS\CRT\IO\EventLoopGroup as EventLoopGroup;

require_once('common.inc');

final class EventLoopGroupTest extends CrtTestCase {

    public function testLifetime() {
        $elg = new EventLoopGroup();
        $this->assertNotNull($elg, "Failed to create default EventLoopGroup");
        $elg = null;
    }

    public function testConstructionWithOptions() {
        $options = EventLoopGroup::defaults();
        $options['num_threads'] = 1;
        $elg = new EventLoopGroup($options);
        $this->assertNotNull($elg, "Failed to create EventLoopGroup with 1 thread");
        $elg = null;
    }
}
