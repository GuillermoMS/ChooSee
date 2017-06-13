<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model.'model.php');
require_once(PATH_other.'function.php');
if(!session_id()) @ session_start();


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $file = $_FILES['data-img-profile']['name'];
    $fileExt= strtolower (pathinfo($file, PATHINFO_EXTENSION));
    $fileSize = $_FILES['data-img-profile']['size'];
    $fileType = $_FILES['data-img-profile']['type'];
    $nameFile = basename($_FILES['data-img-profile']['name']);
    $dir_subida = PATH_mm_img . $_SESSION['email'] . "/" . $nameFile;
    $dir_New_Subida = PATH_mm_img . $_SESSION['email'] . "/profile.".$fileExt;

    if ($fileType=="image/png" || $fileType=="image/jpg" || $fileType=="image/gif"){
        if ($fileSize > 10000000) {
            $errorUpImg=3;
            require_once(PATH_src_view.'v_upImg.php');
        } else {
            if ($fileExt=="png" || $fileExt=="jpg" || $fileExt=="gif"){
                if (move_uploaded_file($_FILES['data-img-profile']['tmp_name'], $dir_subida)) {
                    rename($dir_subida,$dir_New_Subida);
                    insertImg($_SESSION['idUser'],"profile.".$fileExt);
                    $errorUpImg = 0;
                    require_once(PATH_src_view . 'v_upImg.php');
                } else {
                    $errorUpImg = 1;
                    require_once(PATH_src_view . 'v_upImg.php');
                }
            }else{
                $errorUpImg=4;
                require_once(PATH_src_view.'v_upImg.php');
            }
        }
    }else{
        $errorUpImg=5;
        require_once(PATH_src_view.'v_upImg.php');
    }
}else{
    $errorUpImg=2;
    require_once(PATH_src_view.'v_upImg.php');
}

function insertImg($id,$file){
    $conn = new Connection;
    $sql = "UPDATE user SET profilePhoto='".$file."' WHERE idUser='".$id."'";
    return $data = $conn->set($sql);
}

?>