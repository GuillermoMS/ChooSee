<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

    function videos(){
        $conn = new Connection;
        $data = $conn->get("SELECT * FROM video WHERE idVideo=" . $_POST['idVideo'] . "");
        return $data;
    }

    function comments($videos){
        $conn = new Connection;
        $sql = "SELECT c.*, u.name, u.nick FROM comment as c LEFT JOIN user as u on c.idUser = u.idUser WHERE idVideo='".$videos[0]['idVideo']."' order by date desc";
        return $data = $conn->get($sql);
    }

    $videos = videos();
    $comments= comments($videos);
    $hoy = new DateTime(date("y-m-d"));

    require_once PATH_src_view."v_comments.php";


?>
