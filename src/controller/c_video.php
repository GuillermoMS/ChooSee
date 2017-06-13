<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(isset($_POST['idvideo'])) {
    function videos(){
        $conn = new Connection;
        $sql="UPDATE `video` SET numPlay = numPlay+1 WHERE idVideo=" . $_POST['idvideo'] ."";
        $conn->set($sql);
        $sql="SELECT * FROM video WHERE idVideo=" . $_POST['idvideo'] . "";
        $data = $conn->get($sql);
        return $data;
    }
}

function userVideo($videos){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM USER WHERE idUser='".$videos[0]['idUser']."'");
    return $data[0]['name'];
}

function numComment($videos){
    $conn = new Connection;
    return $data = $conn->get("SELECT COUNT(*) FROM comment WHERE idVideo='".$videos[0]['idVideo']."'");
}

function comments($videos){
    $conn = new Connection;
    $sql = "SELECT c.*, u.name, u.nick FROM comment as c LEFT JOIN user as u on c.idUser = u.idUser WHERE idVideo='".$videos[0]['idVideo']."' order by date desc";
    return $data = $conn->get($sql);
}

$videos = videos();
$autor= userVideo($videos);
$idVideo = $videos[0]['idVideo'];
$name = $videos[0]['name'];
$path = $videos[0]['path'];
$description = $videos[0]['description'];
$nPlay = $videos[0]['numPlay'];
$like = $videos[0]['likes'];
$disLikes = $videos[0]['dislikes'];
$copy = $videos[0]['copyright'];
$date = new DateTime($videos[0]['dateUp']);
$hoy = new DateTime(date("y-m-d"));
$time = $date->diff($hoy);
$days = $time->format('%d días');
$numComment= numComment($videos);
$comments= comments($videos);

switch ($copy){
    case 0:
        $licence="Creative Commons";
        $download="";
        break;

    case 1:
        $licence="Copyleft";
        $download="";
        break;

    case 2:
        $licence="Copyright";
        $download="nodownload";
        break;
}

require_once (PATH_src_view.'v_play.php');

echo'<script src="../../js/js_reloadComments.js"></script>';
echo'<script src="../../js/js_search.js"></script>';
echo'<script src="../../js/js_home.js"></script>';
echo'<script src="../../js/js_register.js"></script>';
echo'<script src="../../js/js_profile.js"></script>';
echo'<script src="../../js/js_popupLegen.js"></script>';


?>