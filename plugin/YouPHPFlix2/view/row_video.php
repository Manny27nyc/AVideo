/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<div class="poster rowVideo" id="poster<?php echo $uid; ?>" poster="<?php echo $poster; ?>"
     style="
     display: none;
     background-image: url(<?php echo $global['webSiteRootURL']; ?>plugin/YouPHPFlix2/view/img/loading.gif);
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
     ">
    <div class="posterDetails " style="
         background: -webkit-linear-gradient(left, rgba(<?php echo $obj->backgroundRGB; ?>,1) 40%, rgba(<?php echo $obj->backgroundRGB; ?>,0) 100%);
         background: -o-linear-gradient(right, rgba(<?php echo $obj->backgroundRGB; ?>,1) 40%, rgba(<?php echo $obj->backgroundRGB; ?>,0) 100%);
         background: linear-gradient(right, rgba(<?php echo $obj->backgroundRGB; ?>,1) 40%, rgba(<?php echo $obj->backgroundRGB; ?>,0) 100%);
         background: -moz-linear-gradient(to right, rgba(<?php echo $obj->backgroundRGB; ?>,1) 40%, rgba(<?php echo $obj->backgroundRGB; ?>,0) 100%);">
        <h2 class="infoTitle"><?php echo $value['title']; ?></h2>
        <?php
        include $global['systemRootPath'] . 'plugin/YouPHPFlix2/view/row_info.php';
        ?>
    </div>
</div>