<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
require_once(PATH_other.'classs.php');
if(!session_id()) @ session_start();



if(isset($_POST['email'])) {
    if (userExist($_POST['pass'])) {
        $_SESSION['login']=true;
        $userDataArray =userData();
        $_SESSION['idUser']=$userDataArray['idUser'];
        $_SESSION['email']=$userDataArray['email'];
        $_SESSION['img']=$userDataArray['profilePhoto'];
        $_SESSION['nick']=$userDataArray['nick'];
        $_SESSION['date']=getdate();
        header('Location: http://choosee.sytes.net/');
    }else {
        $_SESSION['login']=false;
    }
}

/**
 *  Funcion que filtrasi exite ya un usuario con ese email registrado.
 * @return array
 */
function userExist($pass){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM USER WHERE EMAIL='".$_POST['email']."'");
    foreach ($data as $dt){
        return password_verify($pass,$dt['password']);
    }
}

function userData(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM USER WHERE EMAIL='".$_POST['email']."'");
    foreach ($data as $dt){
        return $dt;
    }
}

if(isset($_POST['cSession']) && $_POST['cSession']==1) {
    $_SESSION['login']=false;
}

?>