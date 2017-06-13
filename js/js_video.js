$('document').ready(function () {

    $('.cont-video a').on('click',function (e){
        var idVideo = $(this).attr('id');
        e.preventDefault();
        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_video.php',
            data: 'idvideo='+idVideo,
            beforeSend: function () {
                $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            success: function(response)
            {
                $('#cont').html(response);
                $('#cont-comment').hide();
            },
            dataType: 'html'
        });
    });
});