<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if (isset($_POST['text'])){
    $videos = videos();
    $numVideos = count($videos);
    
    for ($i=0; $i<$numVideos;$i++){
            if($videos[$i]["img"]!=null) $img[$i] = $videos[$i]["img"];
            if($videos[$i]["idVideo"]!=null) $video[$i] = $videos[$i]["idVideo"];
            if($videos[$i]["name"]!=null) $name[$i]     = $videos[$i]['name'];
            if($videos[$i]["dateUp"]!=null) $date[$i]     = $videos[$i]['dateUp'];
            if($videos[$i]["nameUser"]!=null) $nameUser[$i] = $videos[$i]['nameUser'];
            if($videos[$i]["numPlay"]!=null) $numPlay[$i] = $videos[$i]['numPlay'];
    }


    require_once PATH_src_view . "v_search_videos.php";
}

function videos(){
    $conn = new Connection;
    $sql="SELECT v.*, u.name as nameUser FROM video v INNER JOIN user u ON v.idUser = u.idUser WHERE v.NAME LIKE '%". $_POST['text'] ."%'";
    $data = $conn->get($sql);
    return $data;
}


echo'<script src="../../js/js_video.js"></script>';


?>