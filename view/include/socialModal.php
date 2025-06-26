/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$social = getSocialModal($video['id'], @$url, @$title);
?>
<button class="btn btn-primary" onclick="showSharing<?php echo $social['id']; ?>()">
    <span class="fa fa-share"></span> <?php echo __("Share"); ?>
</button>
<?php echo $social['html']; ?>