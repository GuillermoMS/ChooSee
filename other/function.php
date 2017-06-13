<?php

function printVarDump($print){
    echo "<pre>";
    var_dump($print);
    echo "<pre>";
}

// Videos mas recientes
function mostDate(){
    $conn = new Connection;
    $data = $conn->get("SELECT v.*, u.name as nameUser FROM video v INNER JOIN user u ON v.idUser = u.idUser ORDER BY dateUp DESC");
    return $data;
}
// Videos mas vistos
function mostView(){
    $conn = new Connection;
    $data = $conn->get("SELECT v.*, u.name as nameUser FROM video v INNER JOIN user u ON v.idUser = u.idUser ORDER BY likes DESC");
    return $data;
}

// Funcion que devuelve la diferencia de tiempo en dias, meses y/o años.
function timeToOld($date){
    $dt= explode(" ", $date);
    $hoy = new DateTime(date("y-m-d"));
    $date = new DateTime($dt[0]);
    $time = $date->diff($hoy);
    $days = $time->format('%d días');
    if($days>31)
      return $times = $time->format('%m mes, %d días');
    else if($days>365)
      return $times = $time->format('%y años, %m mes, %d días');
    else
      return $times = $time->format('%d días');
}



$mostDateData = $url_most_date_img = $url_most_date_video = $name_most_date = $user_most_date = $date_most_date = array();
$mostViewData = $url_most_view_img = $url_most_view_video = $name_most_view = $user_most_view = $date_most_view = array();

$mostDateData = mostDate();
for ($i=0; $i<(count($mostDateData));$i++){
    $url_most_date_img[$i]=$mostDateData[$i]["img"];
    $url_most_date_video[$i]=$mostDateData[$i]["idVideo"];

    $name_most_date[$i] = $mostDateData[$i]['name'];

    $user_most_date[$i] = $mostDateData[$i]['idUser'];

    $date_most_date[$i] = $mostDateData[$i]['dateUp'];
    $nameUser_most_date[$i] = $mostDateData[$i]['nameUser'];
    $num_Visual_most_date[$i] = $mostDateData[$i]['numPlay'];

}

$mostViewData = mostView();
for ($i=0; $i<(count($mostViewData));$i++){
    $url_most_view_img[$i]=$mostViewData[$i]["img"];
    $url_most_view_video[$i]=$mostViewData[$i]["idVideo"];
    $name_most_view[$i] = $mostViewData[$i]['name'];
    $user_most_view[$i] = $mostViewData[$i]['idUser'];
    $date_most_view[$i] = $mostViewData[$i]['dateUp'];
    $nameUser_most_view[$i] = $mostViewData[$i]['nameUser'];
    $num_Visual_most_view[$i] = $mostViewData[$i]['numPlay'];
}

?>