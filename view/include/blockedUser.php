/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
 <!-- blocked user -->
<div class="row main-video" id="mvideo">
    <div class="col-md-2 firstC"></div>
    <div class="col-md-8 secC">
        <div id="videoContainer">
            <div class="panel panel-default">
                <div class="panel-body ">
                    <center>
                        <br>
                        <br>
                        <i class="fas fa-user-slash fa-3x"></i><hr>
                        <?php echo __("You've blocked user ").User::getNameIdentificationById($video['users_id']); ?><br>
                        <?php echo __("You won't see any comments or videos from this user"); ?><hr>
                        <?php
                        echo User::getblockUserButton($video['users_id']);
                        ?>
                        <br>
                        <br>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-2 col-md-2"></div>
</div>
<!--/row-->
