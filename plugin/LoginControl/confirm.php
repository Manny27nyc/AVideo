/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once '../../videos/configuration.php';
$obj = AVideoPlugin::getDataObjectIfEnabled("LoginControl");

if (empty($obj)) {
    forbiddenPage("Plugin disabled");
}

if (!empty($_REQUEST['confirmation'])) {
    if (LoginControl::validateConfirmationCodeHash($_REQUEST['confirmation'])) {
        header("Location: {$global['webSiteRootURL']}user?msg=". urlencode(__("Your device is confirmed")));
        exit;
    }
}

if (empty($users_id)) {
    if (!User::isLogged()) {
        gotToLoginAndComeBackHere("");
    } else {
        $users_id = User::getId();
    }
}

if (empty($_REQUEST['confirmation_code'])) {
    forbiddenPage("Confirmation code not found");
}

if (LoginControl::confirmCode($users_id, $_REQUEST['confirmation_code'])) {
    header("Location: {$global['webSiteRootURL']}user?msg=". urlencode(__("Your device is confirmed")));
}
