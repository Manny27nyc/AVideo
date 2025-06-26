/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<script>
    function socketCDNStorageMoved(json) {
        var element = $("#grid.videosManager");
        if(element.length && typeof element.bootgrid === 'function'){
            console.log('socketCDNStorageMoved', json);
            avideoToastSuccess(json);
            element.bootgrid('reload');
        }
    }
</script>