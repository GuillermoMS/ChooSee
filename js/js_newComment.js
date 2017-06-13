
$('#btn-newComment').on('click',newComment);

function newComment(){
    var comment = $('#newComment').val();
    var idVideo = $('source').attr('id');

    $.ajax({
        type: 'POST',
        async:true,
        url: '../src/controller/c_new_comment.php',
        data: 'newComment='+comment+'&idVideo='+idVideo,
        beforeSend: function () {
            $('#btn-newComment').html('<img src="../../mm/img/app/loading.gif" id="loading">');
        },
        success: function(response)
        {
            $('#newComment').val("");
            reloadComment(idVideo,response);
        },
        dataType: 'html'
    });
}
