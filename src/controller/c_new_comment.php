<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(isset($_SESSION['idUser'])) {
    if(isset($_POST['newComment']) && $_POST['newComment'] !=""){
        $conn = new Connection;
        $hoy = date("Y-m-d");
        $sql = "INSERT INTO `comment`(`idComment`, `idUser`, `idVideo`, `date`, `comment`, `published`) VALUES (NULL, " . $_SESSION['idUser'] . ", " . $_POST['idVideo'] . ", '" . $hoy . "', '" . $_POST['newComment'] . "', 0)";
        $data = $conn->set($sql);
        echo"<p id='msgNewComment'>Añadido el comentario.</p>";
    }else{
        echo"<p id='msgNewComment'>El campo debe de estar relleno.</p>";
    }
}else{
    echo"<p id='msgNewComment'>Para comentar debes de estar registrado.</p>";
}
?>