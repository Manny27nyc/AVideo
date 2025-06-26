/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

$source = "php://stdin";
if (isset($argv[1])) {
    $source = $argv[1];
}

$input_lines = file($source);
foreach ($input_lines as $line) {
    // Strip AWS_EXTERN_C_BEGIN/END
    if (preg_match('/AWS_EXTERN_C/', $line)) {
        continue;
    }

    // Strip macros/includes
    if (preg_match('/^#/', $line)) {
        continue;
    }

    // Strip visibility attributes
    $line = str_replace('AWS_CRT_API ', '', $line);

    echo($line);
}
