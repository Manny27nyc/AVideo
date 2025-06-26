/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<div class="panel panel-danger">
    <div class="panel-heading">
        <?php echo $video['title']; ?>
    </div>
    <div class="panel-body">
        <i class="fas fa-sync fa-spin"></i>
        <?php
        echo __('Created') . ': ' . humanTimingAgo($isMoving['created'], 0, false).' ';
        echo __('Modified') . ': ' . humanTimingAgo($isMoving['modified'], 0, false);
        ?>
    </div>

    <div class="panel-footer">
        <?php
        $file = CDNStorage::getLogFile($videos_id);
        echo nl2br(file_get_contents($file));
        ?>
    </div>
</div>