/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

global $global;
require_once $global['systemRootPath'] . 'plugin/YPTWallet/YPTWalletPlugin.php';

class YPTWalletStripe extends YPTWalletPlugin{

    public function getAprovalButton() {
        global $global;
        include $global['systemRootPath'].'plugin/YPTWallet/plugins/YPTWalletStripe/confirmButton.php';
    }


    public function getRecurrentAprovalButton() {
        global $global;
        include $global['systemRootPath'].'plugin/YPTWallet/plugins/YPTWalletStripe/confirmRecurrentButton.php';
    }

    public function getEmptyDataObject() {
        global $global;
        $obj = new stdClass();
        //$obj->RedirectURL = "{$global['webSiteRootURL']}plugin/YPTWallet/plugins/YPTWalletStripe/redirect_url.php";
        //$obj->CancelURL = "{$global['webSiteRootURL']}plugin/YPTWallet/plugins/YPTWalletStripe/cancel_url.php";
        return $obj;
    }

}
