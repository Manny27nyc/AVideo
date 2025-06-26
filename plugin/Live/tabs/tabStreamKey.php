/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<div class="panel panel-default">
    <div class="panel-heading"><i class="fas fa-hdd"></i> <?php echo __("Advanced"); ?></div>
    <div class="panel-body" style="overflow: hidden;">
        <div class="form-group <?php echo getCSSAnimationClassAndStyle('animate__flipInX', 'key', 0.1); ?>">
            <label for="destinationApplication"><i class="fa fa-cog"></i> <?php echo __("Destination Application Name"); ?>:</label>
            <?php
            getInputCopyToClipboard('destinationApplication', Live::getDestinationApplicationName());
            ?>
        </div>
        <div class="form-group <?php echo getCSSAnimationClassAndStyle('animate__flipInX', 'key', 0.1); ?>">
            <label for="destinationHost"><i class="fa fa-cog"></i> <?php echo __("Destination Host"); ?>:</label>
            <?php
            getInputCopyToClipboard('destinationHost', Live::getDestinationHost());
            ?>
        </div>
        <div class="form-group <?php echo getCSSAnimationClassAndStyle('animate__flipInX', 'key', 0.1); ?>">
            <label for="destinationPort"><i class="fas fa-door-open"></i> <?php echo __("Destination Port"); ?>:</label>
            <?php
            getInputCopyToClipboard('destinationPort', Live::getDestinationPort());
            ?>
        </div>
    </div>
</div>