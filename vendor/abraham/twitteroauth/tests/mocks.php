/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

declare(strict_types=1);

namespace Abraham\TwitterOAuth;

// Mock time and random values for consistent tests with VCR
function time()
{
    return MOCK_TIME;
}

function microtime()
{
    return 'FAKE_MICROTIME';
}

function mt_rand()
{
    return 123456789;
}
