<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();

$imgOK=0;
$videoOK=0;
$imgUpOK=0;
$videoUpOK=0;
$nameImg=null;
$nameVideo=null;

if(isset($_POST['upvideo']) && $_POST['upvideo']==1 ){
    require_once(PATH_src_view.'v_upVideo.php');
}else {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        $idVideo = idMaxVideos();
        $dir_Img = PATH_mm_img . $_SESSION['email'] . "/";
        $dir_Img_Final = PATH_mm_img;
        $dir_Video = PATH_mm_video . $_SESSION['email'] . "/";
        $dir_Video_Final = PATH_mm_video ;
        if (!file_exists($dir_Img)) mkdir($dir_Img, 0777);
        if (!file_exists($dir_Video)) mkdir($dir_Video, 0777);

        if (count($_FILES) == 2 ) {
            // Comprueba que son un solo video y una sola imagen
            foreach ($_FILES as $data) {
                $fileType = $data['type'];
                $typeFile = explode("/", $fileType);
                if ($typeFile[0] == "image") $imgOK = 1;
                if($typeFile[0] == "video") $videoOK=1;
            }

            if($imgOK==1 && $videoOK==1){
                foreach ($_FILES as $data) {
                    if ($data['error'] == UPLOAD_ERR_OK) {
                        $fileName = $data['name'];
                        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                        $fileSize = $data['size'];
                        $fileType = $data['type'];
                        $typeFile = explode("/", $fileType);
                        $tmpFile = $data['tmp_name'];


                        if ($typeFile[0] == "image") {
                            $dir = $dir_Img . $fileName;
                            $dirFinal = $dir_Img_Final.$idVideo.".".$fileExt;
                            if ($fileSize > 10000000) {
                                //Supera el limite de peso.
                                $er = error(1);
                                require_once(PATH_src_view . 'v_upVideo.php');
                            } else {
                                if ($fileExt == "png" || $fileExt == "jpg") {
                                    if (move_uploaded_file($tmpFile, $dir)) {
                                        if(rename($dir,$dirFinal)){
                                            $imgUpOK=1;
                                            $nameImg=$idVideo.".".$fileExt;
                                        }
                                    } else {
                                        //Error al subir el fichero
                                        $er = error(3);
                                        require_once(PATH_src_view . 'v_upVideo.php');
                                    }
                                } else {
                                    //Si la extension no es png o jpg
                                    $er = error(2);
                                    require_once(PATH_src_view . 'v_upVideo.php');
                                }
                            }
                        } else if ($typeFile[0] == "video") {
                            $dir = $dir_Video . $fileName;
                            $dirFinal = $dir_Video_Final.$idVideo.".".$fileExt;
                            if ($fileSize > 1000000000) {
                                //Supera el limite de peso.
                                $er = error(5);
                                require_once(PATH_src_view . 'v_upVideo.php');
                            } else {
                                if ($fileExt == "mp4" || $fileExt == "webm" || $fileExt == "ogg") {
                                    if (move_uploaded_file($tmpFile, $dir)) {
                                        if(rename($dir,$dirFinal)){
                                            $videoUpOK=1;
                                            $nameVideo=$idVideo.".".$fileExt;
                                        }
                                    } else {
                                        //Error al subir el fichero
                                        $er = error(7);
                                        require_once(PATH_src_view . 'v_upVideo.php');
                                    }
                                } else {
                                    //Si la extension no es mp4, webm, ogg
                                    $er = error(6);
                                    require_once(PATH_src_view . 'v_upVideo.php');
                                }
                            }
                        }
                    }
                }// Termina el foreach
            }else{
                $er = error(11);
                require_once(PATH_src_view . 'v_upVideo.php');
            }
        }else{
            $er = error(10);
            require_once(PATH_src_view . 'v_upVideo.php');
        }
    } else {
        $er = error(0);
        require_once(PATH_src_view . 'v_upVideo.php');
    }
}

if($imgUpOK==1 && $videoUpOK==1){

    $hoy= date("Y-m-d");

    if(upVideo($_SESSION['idUser'], $_POST['nameV'], $nameVideo, $nameImg, $_POST['descV'], $hoy, $_POST['copy'])){
        $er = error(4);
        require_once(PATH_src_view . 'v_upVideo.php');
    }else{
        $er = error(12);
        require_once(PATH_src_view . 'v_upVideo.php');
    }
}else{
    $er = error(8);
    require_once(PATH_src_view . 'v_upVideo.php');
}


function idMaxVideos(){
    $conn = new Connection;
    $data = $conn->get("SELECT MAX(idVideo) FROM video");
    return (int)($data[0][0])+1;
}

function error($num){
    switch ($num){
        case 0:
            $strError="Conexión fallida, porfavor intentelo de nuevo más tarde.";
            break;
        case 1:
            $strError="La imagen supera el limite de tamaño (10MB).";
            break;
        case 2:
            $strError="La extensión de la imagen debe de ser PNG o JPG.";
            break;
        case 3:
            $strError="Error al subir la imagen. Porfavor intentelo de nuevo más tarde";
            break;
        case 4:
            $strError="Los archivos se han subido correctamente.";
            break;
        case 5:
            $strError="El video supera el limite de tamaño (1GB)";
            break;
        case 6:
            $strError="La extensión del video debe de ser MP4, WEBM o OGG";
            break;
        case 7:
            $strError="Error al subir el video. Porfavor intentelo de nuevo más tarde.";
            break;
        case 8:
            $strError="Fallo al subir archivos al servidor";
            break;
        case 9:
            $strError="Debes de subir dos archivos, una imagen y un video.";
            break;
        case 10:
            $strError="Debes de subir dos archivos, una imagen y un video.";
            break;
        case 11:
            $strError="Debes de subir dos archivos, una imagen y un video.";
            break;
        case 12:
            $strError="Error al subir los archivos a la base de datos.";
            break;
        default: $strError="";
            break;
    }
    return $strError;
}

function upVideo($idUser, $name, $nameVideo, $nameImg, $desc, $date, $copy){
    $sql = "INSERT INTO `video`(`idVideo`, `idUser`, `name`, `path`, `img`, `description`, `dateUp`, `copyright`)
            VALUES ('', ".$idUser.", '".$name."', '".$nameVideo."', '".$nameImg."', '".$desc."', '".$date."', '".$copy."')";
    $conn = new Connection;
    return $data = $conn->set($sql);
}

echo'<script src="../../js/js_profile.js"></script>';
echo'<script src="../../js/js_popupLegen.js"></script>';

?>