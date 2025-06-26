/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$obj = AVideoPlugin::getObjectDataIfEnabled('Subscription');
?>
<li>
    <hr>
    <h3 class="text-danger">
        <i class="fas fa-filter"></i> <?php echo __("R Rating"); ?>
    </h3>
    <ul style="margin: 0; padding-left: 15px; list-style-type: none;">
        <?php
        foreach (Video::$rratingOptions as $value) {
            if (empty($value)) {
                $label = __("Not Rated");
                $value = 0;
            } else {
                $label = strtoupper($value);
            }
            ?>
            <li>
                <a href="<?php echo $global['webSiteRootURL']; ?>?rrating=<?php echo $value; ?>">
                    <?php echo $label; ?>
                </a>  
            </li>  
            <?php
        }
        ?>
    </ul>
</li>     



