/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<button class="btn btn-default btn-outline btn-xs btn-sm" onclick="$(this).find('table').slideToggle();" style="position: relative;">
    PG
    <table class="table-bordered" style="z-index: 1;border: 2px solid #555; border-radius: 4px; margin: 2px;border-collapse: separate !important; display: none; position: absolute; left: 0;">
        <tr>
            <td style="font-size: 1.5em; text-align: center; font-weight: bold; padding: 1px 2px;">PG</td>
            <td style="font-size: 0.8em; text-align: center; font-weight: bold; padding: 1px 2px;"><?php echo strtoupper(__("Parental Guidance Suggested")); ?></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 0.7em; text-align: center; padding: 1px 2px;"><?php echo strtoupper(__("Some material may not be suitable for children")); ?></td>
        </tr>
    </table>
</button>