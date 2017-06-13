<!doctype html>
<html lang="es">
<?php

require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
if(!session_id()) @ session_start();

function cargar(){
    // Controla login
    if(isset($_COOKIE['login']) && $_COOKIE['login']){
        view();
    //	echo "con cookie <br><br>";
    }else{
        if( isset($error) && $error){
            require_once(PATH_src_view.'v_adm_login_error.php');
        }else{
            if(isset($_POST['usu']) && isset($_POST['pass'])){
                $conn = new Connection;
                $adm = $conn->get("SELECT * FROM user WHERE email='".$_POST['usu']."'");
                if($adm){
                    foreach($adm as $registro){
                        if(password_verify($_POST['pass'],$registro["password"])){
                            setcookie("login", true, time()+3600);
                            view();
                            //echo "si usu y pasa <br><br>";
                        }else{
                            $error=true;
                        }
                    }
               }else{
                  // error en la consulta.
               }
            }else{
                require_once(PATH_src_view.'v_adm_head.php');
                require_once(PATH_src_view.'v_adm_login.php');
            //	echo "si no usu ni pasa <br><br>";
            }
        }
    }
}

function view(){
    $error = false;
    $_SESSION['loginOk']=true;
    $numUser = numUser();
    $numVideo = numVideo();
    $numCommnent = numComment();
    $sServer= serverStatus();
    $numRegs = numReg();
    if(isset($_POST['view'])){
        viewMenu();
        if(isset($_POST['bane'])){
            echo $_POST['bane'];
        }else{
            echo "<br><br> No le he dado a bane <br><br>";
        }
    }else{
        require_once(PATH_src_view.'v_adm_head.php');
        require_once(PATH_src_view.'v_adm.php');
    }
}

// Cerrar sesion
if(isset($_POST['clsesion'])){
    require_once(PATH_src_view.'v_adm_login.php');
    $error = false;
    session_destroy();
    setcookie("login", false, time()+3600);
}else{
    cargar();
}

// Estado del servidor
function serverStatus(){
    $check = @fsockopen($_SERVER['SERVER_NAME'], 80, $errno, $errstr, 30);
    if($check){
        return true;
    }else{
        return false;
    }
}

// MUN USER
function numUser(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM user");
    return count($data)-1;
}

// USERs
function user(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM user");
    return ($data);
}

// SIN TERMINAR
// NEW USER
function nUser($idUser, $rol, $email, $password, $date, $name, $lastname, $nick, $description, $birth, $city, $lenguaje, $nVideo, $nComment, $profilePhoto, $bane){
    $conn = new Connection;
    $data = $conn->get("INSERT INTO USER (`idUser`, `rol`, `email`, `password`, `date`, `name`, `lastname`, `nick`, `description`, `birth`, `city`, `lenguaje`, `nVideo`, `nComment`, `profilePhoto`, `bane`) VALUES (".$idUser.", ".$rol.", ".$email.", ".$password.", ".$date.", ".$name.", ".$lastname.", ".$nick.", ".$description.", ".$birth.", ".$city.", ".$lenguaje.", ".$nVideo.", ".$nComment.", ".$profilePhoto.", ".$bane.")");
    return ($data);
}

// MOD USER
function mUser($idUser){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM user");
    return ($data);
}

// DEL USER
function dUser($idUser){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM user");
    return ($data);
}

// NUM VIDEO
function numVideo(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM video");
    return count($data)-1;
}

// VIDEOs
function videos(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM video");
    return $data;
}

// NEW VIDEO

// MOD VIDEO

// DEL VIDEO

// NUM COMMENT
function numComment(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM comment");
    return count($data)-1;
}

// COMMENTs
function comments(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM comment");
    return $data;
}


// NEW COMMENT

// MOD COMMENT

// DEL COMMENT

// NUM REG
function numReg(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM reg");
    return count($data)-1;
}

// REGs
function regs(){
    $conn = new Connection;
    $data = $conn->get("SELECT * FROM reg ORDER by date DESC");
    return $data;
}

function viewMenu(){
    // Controla las vistas
    if(isset($_POST['view'])){
        switch($_POST['view']){
            case 'usu':
                $users = user();
                require_once(PATH_src_view.'v_adm_user.php');
            break;

            case 'nUsu':
                require_once(PATH_src_view.'v_adm_user_new.php');
            break;

            case 'mUsu':
                require_once(PATH_src_view.'v_adm_user_mod.php');
            break;

            case 'dUsu':
                require_once(PATH_src_view.'v_adm_user_del.php');
            break;

            case 'video':
                $videos = videos();
                require_once(PATH_src_view.'v_adm_video.php');
            break;

            case 'nVideo':
                $videos = videos();
                require_once(PATH_src_view.'v_adm_video_new.php');
            break;

            case 'mVideo':
                $videos = videos();
                require_once(PATH_src_view.'v_adm_video_mod.php');
            break;

            case 'dVideo':
                $videos = videos();
                require_once(PATH_src_view.'v_adm_video_del.php');
            break;

            case 'comment':
            $comments = comments();
                require_once(PATH_src_view.'v_adm_comment.php');
            break;

            case 'nComment':
                require_once(PATH_src_view.'v_adm_comment_new.php');
            break;

            case 'mComment':
                require_once(PATH_src_view.'v_adm_comment_mod.php');
            break;

            case 'dComment':
                require_once(PATH_src_view.'v_adm_comment_del.php');
            break;

            case 'regs':
                $regs = regs();
                require_once(PATH_src_view.'v_adm_regs.php');
            break;
        }
    }
}
		
?>
</body>
</html>