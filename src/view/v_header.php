<?php
    require_once(PATH_src_view."v_popUPCopyright.php");
    require_once(PATH_src_view."v_popUPCondition.php");
?>

<div class="cont-header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-6">
                <div id="logo">
                    <img src="../../mm/img/app/logo.png" alt="logo Choosee">
                    <i id="btn-menu" class="glyphicon glyphicon-menu-hamburger"></i>
                </div>
            </div>
            <div class="col-sm-6 col-md-4" >
                <div id="cont-search">
                    <div id="search">
                        <div id="icon-search" type="button"><i class="glyphicon glyphicon-search"></i></div>
                        <div id="cont-box"><input type="text" id="box-search" placeholder="Buscar"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="btn-header" id="cont-img">
                    <p>Login<span class="glyphicon glyphicon-triangle-bottom"></span></p>
                    <img src="../../mm/img/app/default.png" alt="tu imagen" id="btn-regis3">
                </div>
            </div>
        </div>
    </div>



    <div id="cont-menu-user">

        <form id="form-login" method="post">
            <ul>
                <li><input type="text" placeholder="Email" id="email-session" name="emailSession"></li>
                <li><input type="password" placeholder="Contraseña" id="pass-session" name="passSession"></li>
                <li><?php if ($errorLogin == 1) echo '<p id="errorLogin">Usuario o Contraseña no validos.</p>'; ?></li>
                <li><input type="submit" value="Iniciar Sesion" id="btn-session"><input type="button" value="Registrate" id="btn-regis"></li>
            </ul>
        </form>
    </div>



    <div class="cont-menu" id="cont-menu">
        <ul>
            <li class="btn-menu" id="btn-home"><span class="glyphicon glyphicon-home"></span>Inicio</li>
            <li class="btn-menu" id="btn-regis2"><span class="glyphicon glyphicon-pencil"></span>Registrarme</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-eye-open"></span>Más vistos</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-fire"></span>Recomendados</li>
            <li class="btn-menu"><span class="glyphicon glyphicon-time"></span>Más recientes</li>
        </ul>
    </div>
</div>

