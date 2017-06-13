$('.btnDelMyVideo').on('click',delVideo);

function delVideo() {

    var idVideo = $(this).attr('value');
    var nameVideo = $(this).parents("tr").children('td:nth-child(2)').text();
    var cfirm = confirm("Seguro que quieres borrar el video: "+nameVideo);

    if(cfirm){
        $.ajax({
            type: 'POST',
            async:true,
            data: 'idVideoDel='+idVideo,
            url: '../src/controller/c_del_video.php',
            success: function(response)
            {
                $('#cont-msgDelComment').html(response);
                $('#msgDelVideo').fadeOut(3500);
            },
            dataType: 'html'
        });
    }

}

