<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if (isset($_POST['idCommentDel']) && $_POST['idCommentDel']>0){
    $conn = new Connection;
    $sql = "DELETE FROM `comment` WHERE idComment=".$_POST['idCommentDel']."";
    $data = $conn->set($sql);
    if($data)
        echo"<p id='msgDelComment'>Comentario borrado correctamente</p>";
    else
        echo"<p id='msgDelComment'>Problemas al borrar el comentario. Intentelo más tarde o pongase en contacto con nosotros en info@choosee.com</p>";
}

?>