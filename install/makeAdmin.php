/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
//streamer config
require_once '../videos/configuration.php';

if (!isCommandLineInterface()) {
    return die('Command Line only');
}
echo "Enter the username or press enter to skip:";
echo "\n";
ob_flush();
$userName = trim(readline(""));

if (!empty($userName)) {
    $user = new User(0, $userName, false);
    if (!empty($user->getBdId())) {
        $sql = "UPDATE users SET isAdmin = 1, status = 'a' where id = ".$user->getBdId();

        $insert_row = sqlDAL::writeSql($sql);
        if ($insert_row) {
            echo "Your user {$userName} is admin now";
            echo "\n";
            die();
        }
    } else {
        echo "User ({$userName}) Not found";
        echo "\n";
        die();
    }
}
echo "Bye";
echo "\n";
die();
