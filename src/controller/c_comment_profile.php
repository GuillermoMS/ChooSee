<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
require_once(PATH_other.'classs.php');
if(!session_id()) @ session_start();

function getAllMyCommentVideo($id){
    $conn = new Connection;
    $sql= "SELECT c.*, v.name as nameVideo FROM user u INNER JOIN video v on u.idUser = v.idUser INNER JOIN comment c on v.idVideo = c.idVideo WHERE u.idUser='".$id."' order by c.date desc";
   // echo $sql;
    return $data = $conn->get($sql);
}

function getAllMyComment($id){
    $conn = new Connection;
    $sql = "SELECT * FROM comment WHERE idUser='".$id."' order by date desc";
    return $data = $conn->get($sql);
}


if(isset($_POST['btnCommentProfile']) && $_POST['btnCommentProfile']=="btn-all-my-comment"){
    $allMyComment = getAllMyComment($_SESSION['idUser']);
    require_once (PATH_src_view."v_all_my_comment.php");
}else if(isset($_POST['btnCommentProfile']) && $_POST['btnCommentProfile']=="btn-all-my-comment-video"){
    $allMyCommentVideo = getAllMyCommentVideo($_SESSION['idUser']);
    require_once (PATH_src_view."v_all_my_comment_video.php");
}

echo'<script src="../../js/js_delCommentProfile.js"></script>';
?>
