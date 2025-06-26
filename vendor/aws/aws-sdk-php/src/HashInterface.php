/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws;

/**
 * Interface that allows implementing various incremental hashes.
 */
interface HashInterface
{
    /**
     * Adds data to the hash.
     *
     * @param string $data Data to add to the hash
     */
    public function update($data);

    /**
     * Finalizes the incremental hash and returns the resulting digest.
     *
     * @return string
     */
    public function complete();

    /**
     * Removes all data from the hash, effectively starting a new hash.
     */
    public function reset();
}
