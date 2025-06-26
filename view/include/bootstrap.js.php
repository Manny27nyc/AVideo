/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
if (empty($global['userBootstrapLatest'])) {
    ?>
    <script src="<?php echo getURL('view/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <?php
} else {
        ?>
    <script src="<?php echo getURL('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo getURL('view/bootstrap/compatibility.js'); ?>" type="text/javascript"></script
    <?php
    }
?>