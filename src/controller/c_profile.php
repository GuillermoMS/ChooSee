<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
require_once(PATH_other.'classs.php');
if(!session_id()) @ session_start();

if(isset($_SESSION['login']) && $_SESSION['login']){
    if(isset($_SESSION['idUser']) && $_SESSION['idUser']>0){
        $user = new User();
        $video = new Video();
        $comment = new Comment();
        $dataUser= getUser($_SESSION['idUser']);
        $user->setUser($_SESSION['idUser'], $dataUser['rol'], $dataUser['email'], $dataUser['password'], $dataUser['name'], $dataUser['lastname'], $dataUser['nick'], $dataUser['date'], $dataUser['description'], $dataUser['nVideo'], $dataUser['nComment'], $dataUser['profilePhoto'], $dataUser['bane']);
        $numVideos= getNumVideoAll($_SESSION['idUser']);
        $numComment= getNumCommentAll($_SESSION['idUser']);
        $numCommentNotMy= getNumCommentAllNotMy($_SESSION['idUser']);
        $fiveDateVideo= getDateVideo($_SESSION['idUser']);
        $fiveMostViewVideo= getMostViewVideo($_SESSION['idUser']);
        //Logueado
        require_once(PATH_src_view . 'v_profile.php');
    }
}else{
    // No logueado
    $advProfile=1;
    echo "<p>No tienes cuenta, Registrate</p>";
}


function getUser($id){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM USER WHERE idUser='".$id."'");
    foreach ($data as $dt){
        return $dt;
    }
}

function getNumVideoAll($id){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM `video` WHERE idUser ='".$id."'");
    return count($data)-1;
}

function getNumCommentAll($id){
    $conn = new Connection;
    $data = $conn->get("SELECT c.idComment FROM comment c WHERE idUser='".$id."'");
    return count($data)-1;
}

function getNumCommentAllNotMy($id){
    $conn = new Connection;
    $sql="SELECT c.idComment FROM comment c WHERE c.idUser != '".$id."'";
    $sql="SELECT c.idUser, c.idComment FROM video v INNER JOIN comment c ON c.idVideo = v.idVideo WHERE c.idUser !='".$id."' and v.idUser='".$id."'";
    $data = $conn->get($sql);
    return count($data)-1;
}

function getDateVideo($id){
    $conn = new Connection;
    return $data = $conn->get("SELECT  * FROM video WHERE idUser='".$id."' order by dateUp desc LIMIT 5");
}

function getMostViewVideo($id){
    $conn = new Connection;
    return $data = $conn->get("SELECT * FROM video WHERE idUser='".$id."' order by numPlay desc LIMIT 5");
}

function insertImg($id,$file){
    $conn = new Connection;
    return $data = $conn->set("UPDATE user SET profilePhoto=".$file." WHERE idUser='".$id."'");
}

?>