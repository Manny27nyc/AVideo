// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
function deleteOldStatistics() {
    modal.showPleaseWait();
    $.ajax({
        url: webSiteRootURL + 'plugin/Cache/deleteStatistics.json.php',
        success: function (response) {
            avideoResponse(response);
            modal.hidePleaseWait();
        }
    });
}