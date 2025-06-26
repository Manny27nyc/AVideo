/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<button class="btn btn-default btn-outline btn-xs btn-sm" onclick="$(this).find('table').slideToggle();" style="position: relative;">
    G
    <table class="table-bordered" style="z-index: 1;border: 2px solid #555; border-radius: 4px; margin: 2px;border-collapse: separate !important; display: none; position: absolute; left: 0;">
        <tr>
            <td rowspan="2" style="font-size: 1.5em; font-weight: bold; padding: 1px 2px;">G</td>
            <td style="font-size: 0.8em; text-align: center; font-weight: bold; padding: 1px 2px;"><?php echo strtoupper(__("General Audiences")); ?></td>
        </tr>
        <tr>
            <td style="font-size: 0.8em; text-align: center; padding: 1px 2px;"><?php echo strtoupper(__("All Ages Admitted")); ?></td>
        </tr>
    </table>
</button>