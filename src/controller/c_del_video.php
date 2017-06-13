<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if (isset($_POST['idVideoDel']) && $_POST['idVideoDel']>0){
    $conn = new Connection;
    $sql = "DELETE FROM `video` WHERE idVideo=".$_POST['idVideoDel']."";
    $data = $conn->set($sql);
    if($data)
        echo"<p id='msgDelVideo'>Video borrado correctamente</p>";
    else
        echo"<p id='msgDelVideo'>Problemas al borrar el video. Intentelo más tarde o pongase en contacto con nosotros en info@choosee.com</p>";
}

?>