/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once 'captcha.php';

$largura = empty($_GET['l']) ? 120 : $_GET['l']; // recebe a largura
$altura = empty($_GET['a']) ? 40 : $_GET['a']; // recebe a altura
$tamanho_fonte = empty($_GET['tf']) ? 18 : $_GET['tf']; // recebe o tamanho da fonte
$quantidade_letras = empty($_GET['ql']) ? 5 : $_GET['ql']; // recebe a quantidade de letras que o captcha terá

$capcha = new Captcha($largura, $altura, $tamanho_fonte, $quantidade_letras);
$capcha->getCaptchaImage();
