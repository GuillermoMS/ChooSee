<?php
    require_once(PATH_src_view."v_popUPCopyright.php");
?>

<div class="cont-header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 ">
                <div id="logo">
                    <img src="../../mm/img/app/logo.png" alt="logo Choosee">
                    <i id="btn-menu-log" class="glyphicon glyphicon-menu-hamburger"></i>
                </div>
            </div>
            <div class="col-sm-6 " >
                <div id="cont-search">
                    <div id="search">
                        <div id="icon-search" type="button"><i class="glyphicon glyphicon-search"></i></div>
                        <div id="cont-box"><input type="text" id="box-search" placeholder="Buscar"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="btn-header" id="cont-img">
                    <p><?php echo $_SESSION['nick']?><span class="glyphicon glyphicon-triangle-bottom"></span></p>
                    <img src="../../mm/img/<?php if(isset($_SESSION['login'])){echo $_SESSION['email']."/".$_SESSION['img'];}else{echo"defaul.png";}?>" alt="tu imagen" id="btn-profile">
                </div>
            </div>
        </div>
    </div>

    <div class="cont-menu" id="cont-menu-log">
        <ul>
            <li class="btn-menu" id="btn-home"><span class="glyphicon glyphicon-home"></span>Inicio</li>
            <li class="btn-menu" id="btn-profile2"><span class="glyphicon glyphicon-user"></span>Mi perfil</li>
            <li class="btn-menu" id="btn-upVideo2"><span class="glyphicon glyphicon-open"></span>Subir video</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-eye-open"></span>Más vistos</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-fire"></span>Recomendados</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-time"></span>Más recientes</li>
        </ul>
    </div>

    <div class="btn-header" id="cont-session">
        <p id="btn-close-session">Cerrar Sesion<span class="glyphicon glyphicon-log-out"></span></p>
    </div>

</div>
