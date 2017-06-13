$('.btn-delComment').on('click',delComment);

function delComment() {
    var idComment = $(this).parent('div').attr('id');
    var idVideo = $('source').attr('id');

    $.ajax({
        type: 'POST',
        async:true,
        url: '../src/controller/c_del_comment.php',
        data: 'idComment='+idComment,
        beforeSend: function () {
            $('#btn-newComment').html('<img src="../../mm/img/app/loading.gif" id="loading">');
        },
        success: function(response)
        {
            $(this).parent().remove();
            reloadComment(idVideo,response);
        },
        dataType: 'html'
    });
}