$('document').ready(function () {

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

    $('#btn-avisoLegal').on('click',function (e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/view/v_avisoLegal.php',
            beforeSend: function () {
                $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            success: function(response)
            {
                $('#cont').html(response);
            },
            dataType: 'html'
        });
    });
});




