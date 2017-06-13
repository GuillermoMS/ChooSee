$('document').ready(function () {

    // Mostrar vista de registro
    $('#logo img').on('click',home);
    $('#btn-home').on('click',home);

    function home() {
        $('#cont-menu').fadeOut('slow');
        window.location.href = "http://choosee.sytes.net/";
    }
});
