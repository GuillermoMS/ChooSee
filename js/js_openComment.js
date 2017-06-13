$('#comment').on('click',openComment);

function openComment(){
    $('.btn-editComment').hide();
    $('#cont-comment').fadeToggle(1500);
}
