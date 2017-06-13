var idVideo = $('#idVideo').val();
reloadComment(idVideo,msg);

function reloadComment(idVideo,msg) {
    $.ajax({
        type: 'POST',
        async:true,
        url: '../src/controller/c_reload_comment.php',
        data: 'idVideo='+idVideo,
        beforeSend: function () {
            $('#btn-newComment').html('<img src="../../mm/img/app/loading.gif" id="loading">');
        },
        success: function(response)
        {
            $('#cont-comment').html(response);
            $('#msgNewComment').html(msg).fadeIn(1000).fadeOut(3000);
            $('.btn-editComment').hide();
        },
        dataType: 'html'
    });
}