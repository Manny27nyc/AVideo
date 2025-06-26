/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// USAGE: php examples/deASCIIdeCrypt.php secretkey.asc password message.asc
// This will fail if the algo on key or message is not 3DES or AES

@include_once dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__).'/../lib/openpgp.php';
require_once dirname(__FILE__).'/../lib/openpgp_crypt_rsa.php';
require_once dirname(__FILE__).'/../lib/openpgp_crypt_symmetric.php';

$keyASCII = file_get_contents($argv[1]);
$msgASCII = file_get_contents($argv[3]);

$keyEncrypted = OpenPGP_Message::parse(OpenPGP::unarmor($keyASCII, 'PGP PRIVATE KEY BLOCK'));

// Try each secret key packet
foreach($keyEncrypted as $p) {
	if(!($p instanceof OpenPGP_SecretKeyPacket)) continue;

	$key = OpenPGP_Crypt_Symmetric::decryptSecretKey($argv[2], $p);

	$msg = OpenPGP_Message::parse(OpenPGP::unarmor($msgASCII, 'PGP MESSAGE'));

	$decryptor = new OpenPGP_Crypt_RSA($key);
	$decrypted = $decryptor->decrypt($msg);

	var_dump($decrypted);
}
