/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<html>
    <head>
        <style>
            html, body{
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body class="<?php echo $global['bodyClass']; ?>">
        <?php
        global $global, $config;
        if (!isset($global['systemRootPath'])) {
            require_once '../videos/configuration.php';
        }
        echo $config->getAdsense();
        ?>
    </body>
</html>
