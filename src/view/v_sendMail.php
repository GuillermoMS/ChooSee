<div id="cont-welcome">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="text-welcome">Bienvenido <?php echo $_POST['name']." ".$_POST['lastname']."." ?></h2>
                <p>Datos: </p>
                <p>Usuario: <?php echo $_POST['email'] ?> .</p>
                <p>Nick: <?php echo $_POST['nick'] ?></p>
                <p>Descripcion: <?php echo $_POST['desc'] ?></p>
                <p>Si alguno de los datos son erroneos o los quiere modificar, pulse el boton modificar en el área mi perfil. </p><button><span class="glyphicon glyphicon-pencil"></span></button>
            </div>
        </div>
    </div>
</div>








