$('document').ready(function () {
    // Mostrar vista de registro
    $('#btn-regis').on('click',v_register);
    $('#btn-regis2').on('click',v_register);
    $('#btn-regis3').on('click',v_register);

    function v_register(){

        var heightWind = $(window).height()-101;
        $('#cont-menu').css({'width':'0','height': heightWind}).addClass('closeLogin').children('li:first').addClass('activeMenu');
        $('#cont-menu-log').css('width','0').addClass('closeLogin').children('li:first').addClass('activeMenuLog');
        $('#cont-menu ul').hide().addClass('closeLogin');
        $('#cont-menu-log  ul').hide().addClass('closeLogin');
        $('#cont-session').css('height','0').addClass('closeLogin');
        $('#cont-menu-user').css('height','0').addClass('closeLogin');
        $('#cont-menu-user input').hide();
        $('#cont-session p').hide();
        $('#email-session-error').hide();
        $('#pass-session-error').hide();

        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_register.php',
            success: function(response)
            {
                $('#cont').html(response);
                $('#regis').on('click',validate());
            },
            dataType: 'html'
        });
    }

    function validate(){
        $("#form-regis").validate({
            rules:{
                email:{required:true, email:true, minlength :8, maxlength: 80},
                cemail:{required:true, email:true, minlength :8, maxlength: 80, equalTo:"#email"},
                pass:{required:true, minlength :8, maxlength: 80},
                cpass:{required:true, equalTo:"#pass"},
                nick:{required:true, minlength :3, maxlength: 15},
                img:{extension:"png|jpg|gif"},
                name:{lettersonly:true, minlength:3, maxlength:30},
                lastname:{ minlength:3, maxlength:30},
                condition:{required:true}
            },
            messages:{
                name:{
                    lettersonly:"Este campo solo acepta letras."
                }
            },
            submitHandler: sendData
        });
    }

    function sendData() {
        var email = $('#email').val();
        var pass = $('#pass').val();
        var name = $('#name').val();
        var lastname = $('#lastname').val();
        var nick = $('#nick').val();
        var desc = $('#desc').val();
        var bird = $('#bird').val();

        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_register.php',
            data: 'email='+email+'&pass='+pass+'&name='+name+'&lastname='+lastname+'&nick='+nick+'&desc='+desc+'&bird='+bird,
            beforeSend: function () {
                $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            success: function(response)
            {
                $('#cont').html(response);
            },
            dataType: 'html'
        });
    }
});