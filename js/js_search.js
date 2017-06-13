$('document').ready(function () {


    $('#icon-search').on('click',search);

    $('body').keyup(function(e) {
        if(e.keyCode == 13) {
            search();
        }
    });

    $('#box-search').on('click',function () {
        $('#box-search').removeAttr('placeholder');
    });

    function search (){
        var widhVideo = $('.wrapper-video').width();
        $('.cont-video img').css({'height': widhVideo, 'width': widhVideo});
        $('.cont-video a').css({'height': widhVideo, 'width': widhVideo});

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

        var text = $('#box-search').val();
        if(text.length){
            $.ajax({
                type: 'POST',
                async:true,
                url: '../src/controller/c_search.php',
                data: 'text='+text,
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
    }

});