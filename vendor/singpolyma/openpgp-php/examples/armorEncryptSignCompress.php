/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
@include_once dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__).'/../lib/openpgp.php';
require_once dirname(__FILE__).'/../lib/openpgp_crypt_rsa.php';

$recipientPublicKey = OpenPGP_Message::parse(OpenPGP::unarmor(file_get_contents('public.asc'), 'PGP PUBLIC KEY BLOCK'));

$encryptedPrivateKey = OpenPGP_Message::parse(OpenPGP::unarmor(file_get_contents('sekret.asc'), 'PGP PRIVATE KEY BLOCK'));
$privateKeyPassphrase = 'test';
$key = OpenPGP_Crypt_Symmetric::decryptSecretKey($privateKeyPassphrase, $encryptedPrivateKey[0]);

$signer = new OpenPGP_Crypt_RSA($key);
$data = new OpenPGP_LiteralDataPacket("some text\n", ['format' => 'u']);
$signed = $signer->sign($data);

$compressed = new OpenPGP_CompressedDataPacket($signed);
$encrypted = OpenPGP_Crypt_Symmetric::encrypt([$recipientPublicKey, $key], new OpenPGP_Message([$compressed]));

echo OpenPGP::enarmor($encrypted->to_bytes(), 'PGP MESSAGE');


