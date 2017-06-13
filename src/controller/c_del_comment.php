<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if (isset($_POST['idComment']) && $_POST['idComment']>0){
    $conn = new Connection;
    $sql = "DELETE FROM `comment` WHERE idComment=".$_POST['idComment']."";
    $data = $conn->set($sql);
    if($data)
        echo"<p id='msgNewComment'>Comentario borrado correctamente</p>";
    else
        echo"<p id='msgNewComment'>Problemas al borrar tu comentario, dirigete a la seccion mi perfiil, mis comentarios.</p>";
}

?>