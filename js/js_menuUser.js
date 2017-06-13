$(document).ready(function(){

    $('#cont-session').css('height','0').addClass('closeLogin');
    $('#cont-menu-user').css('height','0').addClass('closeLogin');
    $('#cont-menu-user input').hide();
    $('#cont-session p').hide();
    $('#email-session-error').hide();
    $('#pass-session-error').hide();

    $('#cont-img p').click(function(){

       if($('#cont-img p span').hasClass('glyphicon-triangle-bottom')) {
           $('#cont-img p span').removeClass('glyphicon-triangle-bottom').addClass('glyphicon-triangle-top');
       }else if($('#cont-img p span').hasClass('glyphicon-triangle-top')){
           $('#cont-img p span').removeClass('glyphicon-triangle-top').addClass('glyphicon-triangle-bottom');
       }

        $('#cont-session').fadeToggle();

        if($('#cont-session').hasClass('closeLogin')){
            $('#cont-session').removeClass('closeLogin').stop().animate({height: ['45', "easeInSine" ]},400).addClass('openLogin');
            $('#cont-session p').show(400);
            $('#email-session-error').show(400);
            $('#pass-session-error').show(400);
        }else if($('#cont-session').hasClass('openLogin')){
            $('#cont-session').removeClass('openLogin').stop().animate({height: [0, "easeInSine" ]},400).addClass('closeLogin');
            $('#cont-session p').hide();
            $('#email-session-error').hide();
            $('#pass-session-error').hide();
        }

       if($('#cont-menu-user').hasClass('closeLogin')){
           $('#cont-menu-user').removeClass('closeLogin').stop().animate({height: ['180', "easeInSine" ]},400).addClass('openLogin');
           $('#cont-menu-user input').show(400);
       }else if($('#cont-menu-user').hasClass('openLogin')){
           $('#cont-menu-user').removeClass('openLogin').stop().animate({height: [0, "easeInSine" ]},400).addClass('closeLogin');
           $('#cont-menu-user input').hide();
       }
    });


});