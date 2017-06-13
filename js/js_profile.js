$('document').ready(function () {

    $('#btn-profile').on('click', profile);
    $('#btn-profile2').on('click', profile);
    $('#btn-upVideo2').on('click', menuUpVideo2);

    function profile() {
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
            beforeSend: function () {
                $('#cont').append('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            url: '../src/controller/c_profile.php',
            success: function(response)
            {
                $('#cont').html(response);
                $('#btn-all-videos').on('click', allVideos);
                $('#btn-all-my-comment-video').on('click', allMyCommentVideo);
                $('#btn-all-my-comment').on('click', allMyComment);
                $('#cont-img-profile img').on('click', modImgUp);
                $('#btn-mod-img').on('click', modImgDonw);
                $('#btn-upVideo').on('click',menuUpVideo);
                $('#mod-profile').on('click',modProfile);
                $('#cont-mod-img').hide()
            },
            dataType: 'html'
        });
    }

    function allVideos() {
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
            url: '../src/controller/c_video_profile.php',
            success: function(response)
            {
                $('#cont-info-my-video').html(response);
            },
            dataType: 'html'
        });
    }

    function allMyComment() {
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

        var idBtn = $('#btn-all-my-comment').attr('id');

        $.ajax({
            type: 'POST',
            async:true,
            data: 'btnCommentProfile='+idBtn,
            url: '../src/controller/c_comment_profile.php',
            success: function(response)
            {
                $('#cont-info-my-video').html(response);
            },
            dataType: 'html'
        });
    }

    function allMyCommentVideo() {
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


       var idBtn = $('#btn-all-my-comment-video').attr('id');
        $.ajax({
            type: 'POST',
            async:true,
            data: 'btnCommentProfile='+idBtn,
            url: '../src/controller/c_comment_profile.php',
            success: function(response)
            {
                $('#cont-info-my-video').html(response);
            },
            dataType: 'html'
        });
    }

    function modImgUp() {
        $('#cont-mod-img-info').fadeToggle();
        $('#cont-mod-img').fadeToggle();
    }

    function modImgDonw() {
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

        var formData = new FormData($("#form-img-profile")[0]);
        $('#cont-mod-img-info').hide();
        $.ajax({
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            async:true,
            url: '../src/controller/c_upImg.php',
            data: formData,
            success: function(response)
            {
                $('#errorUpImg').hide().fadeIn().html(response).fadeOut(4500,function () {
                    $('#cont-mod-img-info').show();
                });

            },
            dataType: 'html'
        });

        $('#cont-mod-img').hide()
    }

    function modProfile() {
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
            url: '../src/controller/c_mod_profile.php',
            success: function(response)
            {
                var name = $('#profile-name').text();
                var lastname = $('#profile-lastname').text();
                var nick  = $('#profile-nick').text();
                var desc = $('#profile-description').text();
                $('#cont-text-profile').html(response);
                $('#new-name').val(name);
                $('#new-lastname').val(lastname);
                $('#new-nick').val(nick);
                $('#new-desc').val(desc);
                $('#new-date-profile').on('click',newProfile);
            },
            dataType: 'html'
        });
    }

    function menuUpVideo() {
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
            data: 'upvideo='+1,
            url: '../src/controller/c_upVideo.php',
            success: function(response)
            {
                $('#cont-info-my-video').html(response);
                $('#btn-up-upVideo').on('click',upVideo);
            },
            dataType: 'html'
        });
    }


    function menuUpVideo2() {
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
            data: 'upvideo='+1,
            url: '../src/controller/c_upVideo.php',
            success: function(response)
            {
                $('#cont').html(response);
              //  $('#cont-title-upVideo').prepend("<div id='cont-info-my-video'></div>");
                $('#btn-up-upVideo').on('click',upVideo);
            },
            dataType: 'html'
        });
    }

    function upVideo() {
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


        var nameV = $('#nameVideoUp').val();
        var descV = $('#descVideo').val();
        var copy  = $('#copyUpVideo').val();
        var fileUpV = document.getElementById("filesUpVideo").files;
        var formData = new FormData();
        for(i=0; i<fileUpV.length; i++){
            formData.append('file'+i,fileUpV[i]);
        }

        formData.append('nameV',nameV);
        formData.append('descV',descV);
        formData.append('copy',copy);

        $.ajax({
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            async:true,
            url: '../src/controller/c_upVideo.php',
            data: formData,
            beforeSend: function () {
                $('#cont-info-my-video').append('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
            success: function(response)
            {
                if($("#cont-info-my-video").length ){
                    $('#cont-info-my-video').html(response);
                }else{
                    $('#cont').html(response);
                }
            },
            dataType: 'html'
        });

    }

    function newProfile() {
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

        var nname = $('#new-name').val();
        var nlastname = $('#new-lastname').val();
        var nnick = $('#new-nick').val();
        var ndesc = $('#new-desc').val();

        $.ajax({
            type: 'POST',
            async:true,
            url: '../src/controller/c_new_profile.php',
            data: 'new-name='+nname+'&new-lastname='+nlastname+'&new-nick='+nnick+'&new-desc='+ndesc,
            success: function(response)
            {
                $('#cont-text-profile').html(response);
            },
            dataType: 'html'
        });
    }

});



