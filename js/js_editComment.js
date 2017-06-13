$('.btn-editComment').on('click',modComment);

function modComment() {
    var idComment = $(this).parents('div.comment').attr('id');
    var idVideo = $('source').attr('id');
    var text = $(this).parent('.btns-comment').siblings('.editComment').val();


    $('.btn-editComment').hide();
    $.ajax({
        type: 'POST',
        async:true,
        url: '../src/controller/c_mod_comment.php',
        data: 'idComment='+idComment+'&text='+text,
        beforeSend: function () {
            $('#btn-newComment').html('<img src="../../mm/img/app/loading.gif" id="loading">');
        },
        success: function(response)
        {
            reloadComment(idVideo,response);
        },
        dataType: 'html'
    });
}

