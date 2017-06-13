$('document').ready(function () {

    var widhVideo = $('.wrapper-video').width();
    $('.cont-video img').css({'height': widhVideo, 'width': widhVideo});
    $('.cont-video a').css({'height': widhVideo, 'width': widhVideo});



    // Mostrar vista de registro
    $('#btn-session').on('click',validateLogin);

    function validateLogin(){
        $("#form-login").validate({
            rules:{
                emailSession:{required:true, email:true, minlength :8, maxlength: 40},
                passSession:{required:true, minlength :8, maxlength: 40},
            },
            messages: {
                emailSession:{
                    required:"El campo no puede estar vacio.",
                    email:"Formato incorrecto (aa@bb.cc).",
                    maxlength:"Maximo 40 caracteres."
                },
                passSession:{
                   required:"El campo no puede estar vacio.",
                   minlength:"Min 8 caracteres.",
                   maxlength:"Maximo 40 caracteres."
                }
            }, highlight: function(element) {
                $(element).addClass('errorLog');
            }, unhighlight: function(element) {
                $(element).removeClass('errorLog');
            },
            submitHandler: login
        });
    }

    function login(){
        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_index.php',
            data: 'email='+$('#email-session').val()+'&pass='+$('#pass-session').val(),
            success: function(response)
            {
                $('body').html(response);
            },
            dataType: 'html'
        });
    }
});