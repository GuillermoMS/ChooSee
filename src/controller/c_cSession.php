<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(isset($_SESSION['login'])){
    $_SESSION['login']=false;
    $errorLogin=0;
    session_destroy();
    header('Location: http://choosee.sytes.net/');
}

?>