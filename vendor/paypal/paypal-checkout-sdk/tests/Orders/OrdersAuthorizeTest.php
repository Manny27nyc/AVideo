/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php



namespace Test\Orders;

use PHPUnit\Framework\TestCase;

use PayPalCheckoutSdk\Orders\OrdersAuthorizeRequest;
use Test\TestHarness;


class OrdersAuthorizeTest extends TestCase
{
    public function testOrdersAuthorizeRequest()
    {
        $this->markTestSkipped("Need an approved Order ID to execute this test.");
        $request = new OrdersAuthorizeRequest('ORDER-ID');
        $request->body = $this->buildRequestBody();

        $client = TestHarness::client();
        $response = $client->execute($request);
        $this->assertEquals(201, $response->statusCode);
        $this->assertNotNull($response->result);
    }
}
