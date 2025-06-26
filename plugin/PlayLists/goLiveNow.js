/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
$(document).ready(function () {
    swal({
        title: "Your playlist is NOT live, do you want to go live now?",
        icon: "warning",
        dangerMode: true,
        buttons: {
            goLive: true
        }
    }).then(function (value) {
        switch (value) {
            case "goLive":

                //modal.showPleaseWait();
                $.ajax({
                    url: liveLink,
                    success: function (response) {
                        if (response.error) {
                            avideoAlertError(response.msg);
                            //modal.hidePleaseWait();
                        } else {
                            avideoToast(response.msg);
                            setTimeout(function () {
                                tryToPlay(0);
                                //location.reload();
                            }, 2000);
                        }
                    }
                });
                break;
        }
    });
});