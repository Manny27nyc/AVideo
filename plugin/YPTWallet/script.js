// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
function updateYPTWallet() {
    $.ajax({
        url: webSiteRootURL + 'plugin/YPTWallet/getBalance.json.php',
        success: function (response) {
            $('.walletBalance').text(response.balance);
        }
    });
}