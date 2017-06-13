<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(isset($_SESSION['idUser'])) {
    if(isset($_POST['idComment']) && $_POST['text'] !=""){
        $conn = new Connection;
        $hoy = date("Y-m-d");

        $sql = "UPDATE `comment` SET `date`='".$hoy."',`comment`='".$_POST['text']."' WHERE idComment=".$_POST['idComment']."";
        $data = $conn->set($sql);
        echo"<p id='msgNewComment'>Comentario modificado.</p>";
    }else{
        echo"<p id='msgNewComment'>El campo debe de estar relleno.</p>";
    }
}else{
    echo"<p id='msgNewComment'>Para comentar debes de estar registrado.</p>";
}
?>