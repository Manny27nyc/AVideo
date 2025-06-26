/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php



namespace Test\Orders;

use PHPUnit\Framework\TestCase;

use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Test\TestHarness;


class OrdersCaptureTest extends TestCase
{

    public function testOrdersCaptureRequest()
    {
        $this->markTestSkipped("Need an approved Order ID to execute this test.");
        $request = new OrdersCaptureRequest('ORDER-ID');

        $client = TestHarness::client();
        $response = $client->execute($request);
        $this->assertEquals(201, $response->statusCode);
        $this->assertNotNull($response->result);
    }
}
