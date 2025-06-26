/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace PayPalCheckoutSdk\Core;

use PayPalHttp\Injector;

class FPTIInstrumentationInjector implements Injector
{
    public function inject($request)
    {
        $request->headers["sdk_name"] = "Checkout SDK";
        $request->headers["sdk_version"] = "1.0.2";
        $request->headers["sdk_tech_stack"] = "PHP " . PHP_VERSION;
        $request->headers["api_integration_type"] = "PAYPALSDK";
    }
}
