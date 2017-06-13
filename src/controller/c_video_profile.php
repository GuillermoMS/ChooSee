<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
require_once(PATH_other.'classs.php');
if(!session_id()) @ session_start();

function getAllVideo($id){
    $conn = new Connection;
    return $data = $conn->get("SELECT  * FROM video WHERE idUser='".$id."' order by dateUp desc");
}

$allVideos = getAllVideo($_SESSION['idUser']);

require_once (PATH_src_view."v_all_video.php");

echo'<script src="../../js/js_delVideo.js"></script>';


?>
