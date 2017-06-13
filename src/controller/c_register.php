<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

if(isset($_POST['email'])){
    if(!userExist()){
        mgsReg(1);
        require_once(PATH_src_view . 'v_register.php');
    }else{
        if(newUser()){
            require_once(PATH_src_view . 'v_sendMail.php');
        }else{
            mgsReg(2);
            require_once(PATH_src_view . 'v_register.php');
        }
    }
}else {
    mgsReg(0);
    require_once(PATH_src_view . 'v_register.php');
}

/**
 *  Funcion que filtrasi exite ya un usuario con ese email registrado.
 * @return array
 */
function userExist(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM USER WHERE EMAIL='".$_POST['email']."'");
    return $data;
}

/**
 * Funcion que inserta al usuario en la base de datos.
 * @return bool True ningun error || False se ha producido algun error.
 */
function newUser(){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $nick=$_POST['nick'];
    $desc=$_POST['desc'];
    $bird=$_POST['bird'];
    $op = ['cost' => 11,];
    $date=date("Y-m-d");

    // Encriptar contraseña
    $pass = password_hash($pass, PASSWORD_BCRYPT, $op);

    // Inserta al usuario en la base de datos
    $conn = new Connection;
    $sql="INSERT INTO `user`(`idUser`, `email`, `password`, `date`, `name`, `lastname`, `nick`, `description`) VALUES (NULL, '".$email."', '".$pass."', '".$date."' ,'".$name."', '".$lastname."', '".$nick."', '".$desc."')";
    $data = $conn->set($sql);

    if(!file_exists(PATH_mm_video.$email)) mkdir(PATH_mm_video.$email,0777);
    if(!file_exists(PATH_mm_img.$email)) mkdir(PATH_mm_img.$email,0777);
    copy(PATH_mm_img_app."default.png",PATH_mm_img.$email."/default.png");

    return $data;
}

function mgsReg($errorReg)
{
    $msgRegister =  "";
    switch ($errorReg) {
        case 0:
            $msgRegister =  "";
            break;
        case 1:
            $msgRegister =  "El email " . $_POST['email'] . " ya existe.";
            break;
        case 2:
            $msgRegister =  "Ha ocurrido un error, vuelva a intentarlo más tarde, disculpe las molestias.";
            break;
    }
    return $msgRegister;
}

echo '<script src="../../js/js_popupCondition.js"></script>';




?>