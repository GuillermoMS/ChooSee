$(document).ready(function(){

    var heightWind = $(window).height()-101;
    $('#cont-menu').css({'width':'0','height': heightWind}).addClass('closeLogin').children('li:first').addClass('activeMenu');
    $('#cont-menu-log').css('width','0').addClass('closeLogin').children('li:first').addClass('activeMenuLog');
    $('#cont-menu ul').hide().addClass('closeLogin');
    $('#cont-menu-log  ul').hide().addClass('closeLogin');

    $('#btn-menu').click(function(){
        if($('#cont-menu').hasClass('closeLogin')){
            $('#cont-menu').removeClass('closeLogin').stop().animate({width: ['300', "easeInSine" ]},400).addClass('openLogin');
            $('#cont-menu ul').show(400);
        }else if($('#cont-menu').hasClass('openLogin')){
            $('#cont-menu').removeClass('openLogin').stop().animate({width: [0, "easeInSine" ]},400).addClass('closeLogin');
            $('#cont-menu ul').hide();
        }
    });

    $('#btn-menu-log').click(function(){
        if($('#cont-menu-log').hasClass('closeLogin')){
            $('#cont-menu-log').removeClass('closeLogin').stop().animate({width: ['300', "easeInSine" ]},400).addClass('openLogin');
            $('#cont-menu-log ul').show(400);
        }else if($('#cont-menu-log').hasClass('openLogin')){
            $('#cont-menu-log').removeClass('openLogin').stop().animate({width: [0, "easeInSine" ]},400).addClass('closeLogin');
            $('#cont-menu-log ul').hide();
        }
    });

});

