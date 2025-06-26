/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$obj = AVideoPlugin::getObjectData("LoginControl");
?>
<li>
    <a data-toggle="tab" href="#loginHistory" id="aloginControl">
        <?php echo __("Login History") ?>
    </a>
</li>
<?php
if ($obj->enablePGP2FA) {
    ?>
<li>
    <a data-toggle="tab" href="#pgp2fa" id="aloginControlpgp2fa">
        <?php echo __("PGP 2FA") ?>
    </a>
</li>
<?php
}
?>