<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(newProfile()) {
    $_SESSION['name']=$_POST['new-name'];
    $_SESSION['lastname']=$_POST['new-lastname'];
    $_SESSION['nick']=$_POST['new-nick'];
    $_SESSION['desc']=$_POST['new-nick'];
    echo '<h2>Modificado el perfil con exito.</h2>
          <p>Para ver los cambios vaya a inico.</p>';
}

else {
    echo "<h2>Error al modificar ele perfil.</h2>";
}
function newProfile(){
    $sql = "UPDATE `user` SET `name`='".$_POST['new-name']."',`lastname`='".$_POST['new-lastname']."',`nick`='".$_POST['new-nick']."',`description`='".$_POST['new-desc']."' WHERE idUser='".$_SESSION['idUser']."'";
    $conn = new Connection;
    return $data = $conn->set($sql);
}


?>