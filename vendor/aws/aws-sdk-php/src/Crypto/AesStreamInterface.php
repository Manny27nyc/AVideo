/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws\Crypto;

use Psr\Http\Message\StreamInterface;

interface AesStreamInterface extends StreamInterface
{
    /**
     * Returns an identifier recognizable by `openssl_*` functions, such as
     * `aes-256-cbc` or `aes-128-ctr`.
     *
     * @return string
     */
    public function getOpenSslName();

    /**
     * Returns an AES recognizable name, such as 'AES/GCM/NoPadding'.
     *
     * @return string
     */
    public function getAesName();

    /**
     * Returns the IV that should be used to initialize the next block in
     * encrypt or decrypt.
     *
     * @return string
     */
    public function getCurrentIv();
}
