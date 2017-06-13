<?php

switch ($errorUpImg){
    case 0:
        echo "<p class='errorUpImg'>Imagen cambiada con exito</p><p>Para ver los cambios vaya a la pagina de inicio</p>";
        break;
    case 1:
        echo "<p class='errorUpImg'>Ha ocurrido un error al subir el archivo, porfavor intentelo de nuevo más tarde.</p>";
        break;

    case 2:
        echo "<p class='errorUpImg'>Lo sentimos la conexión ha fallado, pongase en contacto con nosotros en: info@choosee.com</p>";
        break;

    case 3:
        echo "<p class='errorUpImg'>El tamaño de la imagen no puede ser superior a 10MB, intentelo de nuevo.</p>";
        break;

    case 4:
        echo "<p class='errorUpImg'>La imagen debe de ser de de tipo: jpg, png o gif.</p>";
        break;

    case 5:
        echo "<p class='errorUpImg'>El archivo que intenta subir no es una imagen, porfavor intente subir una imagen.</p>";
        break;
}

?>