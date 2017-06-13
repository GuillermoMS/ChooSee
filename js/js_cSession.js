$('document').ready(function () {
    // Mostrar vista de registro
    $('#btn-close-session').on('click',cSession);

    function cSession(){
        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_cSession.php',
            data: 'cSession=1',
            beforeSend: function () {
                $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            success: function(response)
            {
                $('body').html(response);
            },
            dataType: 'html'
        });
    }


});