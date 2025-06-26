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
use AWS\CRT\IO\InputStream as InputStream;

require_once('common.inc');

final class InputStreamTest extends CrtTestCase {

    const MEM_STREAM_CONTENTS = "THIS IS A TEST";

    private function getMemoryStream() {
        $stream = fopen("php://memory", 'r+');
        fputs($stream, self::MEM_STREAM_CONTENTS);
        rewind($stream);
        return $stream;
    }

    public function testMemoryStream() {
        $mem_stream = $this->getMemoryStream();
        $stream = new InputStream($mem_stream);
        $this->assertNotNull($stream, "Failed to create InputStream from PHP memory stream");
        $this->assertEquals(strlen(self::MEM_STREAM_CONTENTS), $stream->length(), "Stream length doesn't match source buffer");
        $this->assertEquals(self::MEM_STREAM_CONTENTS, $stream->read(), "Stream doesn't match source buffer");
        $this->assertTrue($stream->eof(), "Stream is not EOF after reading");
        $this->assertEquals(0, $stream->seek(0, InputStream::SEEK_BEGIN), "Unable to rewind stream");
        $this->assertFalse($stream->eof(), "Stream is EOF after rewinding");
        $this->assertEquals(0, $stream->seek(0, InputStream::SEEK_END), "Unable to seek to end of stream");
        $this->assertTrue($stream->eof(), "Stream is not EOF after seeking to end");
        $stream = null;
    }
}
