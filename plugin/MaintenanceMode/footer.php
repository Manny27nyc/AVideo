/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<div class="alert alert-warning text-center" style="position: fixed; bottom: 0; left: 0; z-index: 9999; width: 100%; margin: 0; padding: 2px;" role="alert">
    <i class="fas fa-exclamation-triangle"></i> 
    <?php
    echo str_replace("{email}", $config->getContactEmail(), $obj->text);
    ?>
</div>