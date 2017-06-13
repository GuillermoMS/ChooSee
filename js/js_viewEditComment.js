$('.btn-modComment').on('click',viewModComment);

function viewModComment() {
    $('.btn-editComment').show();

    var idComment = $(this).parent('div').attr('id');
    var text = $(this).parent('.btns-comment').siblings('p.textComment').text();
    $(this).parent('.btns-comment').siblings('p.textComment').replaceWith("<textarea id='"+idComment+"' class='editComment'>"+text+"</textarea>");
    $(this).hide();
    $(this).siblings('.btn-editCommnet').show();

}
