/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
function saveShowOnTV(playlists_id, showOnTV) {
    modal.showPleaseWait();
    $.ajax({
        url: webSiteRootURL + 'plugin/PlayLists/saveShowOnTV.json.php?playlists_id=' + playlists_id + '&showOnTV=' + showOnTV,
        success: function (response) {
            if (response.errro) {
                avideoAlertError(response.msg);
            } else {
                avideoToast(response.msg);
            }
            modal.hidePleaseWait();
        }
    });
}