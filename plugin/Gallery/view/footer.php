/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php include $global['systemRootPath'] . 'view/include/footer.php'; ?>
<script>
    function showTrailer(iframe) {
        avideoModalIframe(iframe);
    }
    $('#TrailerModal').on('hidden.bs.modal', function () {
        $('#TrailerModal iframe').attr('src', '');
    });
    $('#bigVideoCarousel').bind('slide.bs.carousel', function (e) {
        setTimeout(function(){
            lazyImage();
        },500);
    });
</script>