$(document).ready(function(){
    $('#copy-legend').click(function(){
        $('#popup').fadeIn('slow');
        return false;
    });

    $('.close').click(function(){
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
});