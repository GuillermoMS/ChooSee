$('.btnDelMyComment').on('click',delCommentProfile);

function delCommentProfile() {

    var idComm = $(this).attr('value');
    var nameComm = $(this).parents("tr").children('td:nth-child(2)').text();
    var cfirm = confirm("Seguro que quieres borrar el comentario: "+nameComm);

    if(cfirm){
        $.ajax({
            type: 'POST',
            async:true,
            data: 'idCommentDel='+idComm,
            url: '../src/controller/c_del_comment_profile.php',
            success: function(response)
            {
                $('#cont-msgDelComment').html(response);
                $('#msgDelComment').fadeOut(3500);
            },
            dataType: 'html'
        });
    }

}
