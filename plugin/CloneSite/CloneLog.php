/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
class CloneLog
{
    public $file;

    public function __construct()
    {
        global $global;
        $clonesDir = Video::getStoragePath()."cache/clones/";
        $this->file = "{$clonesDir}client.log";
        if (!file_exists($clonesDir)) {
            mkdir($clonesDir, 0777, true);
            file_put_contents($clonesDir."index.html", '');
        }
        file_put_contents($this->file, "");
    }

    public function add($message)
    {
        _error_log($message);
        file_put_contents($this->file, $message.PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
