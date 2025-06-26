/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-cog"></i> Subscription Configuration </div>
            <div class="panel-body" style="overflow: hidden;">
                <?php
                $filter = [
                    'displayTopBarSubscribeButton' => 'Show a button on the top to subscribe',
                    'displayLeftMenuSubscribeButton' => 'Show a button on the the left menu to subscribe',
                    'textSubscribe' => 'The button text label'
                ];
                createTable("Subscription", $filter);
                ?>
            </div>
        </div>
    </div>
</div>
