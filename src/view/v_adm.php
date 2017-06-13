<div class='cont' id='cont'>
    <div class="container" id="header-logo">
        <div class="row">
            <div class="col-lg-12">
                <span><img src="" alt="logoChooSee"></span>
                <h3>Bienvenido a la administracion de ChooSee</h3>
            </div>
        </div> 
    </div>
    <div class='container' id="cont-cont">
        <div class='row'>
            <div class='col-sm-8'>
            
                <div class='status-server' id='status-server'>
                    <p>Server: <a href="http://localhost/php/ChooSee/src/view/v_status_server.php" target="_blank"> <?php echo $_SERVER['SERVER_NAME']; ?> </a>
                        <span <?php if($sServer)
                                        echo "id='serverOnline'> Online ";
                                    else 
                                        echo "id='serverOffline'> Offline";
                               ?>
                        </span>
                    </p>
                </div>
                
                <div>
                	<div class="cont-dinamic"></div>
                </div>
            </div>
            <div class='col-lg-4'>
                <div class='cont-button'>
                    <div>
                        <input type='button' value='Usuarios' name='usuarios' id='usu' class='button-adm'><span><?php echo $numUser ?></span>
                    </div>
                    
           <!--     
           			<div>
                        <input type='button' value='New Usuarios' name='nUsuarios' id='nUsu' class='button-adm'>
                    </div>                    
                    <div>
                        <input type='button' value='Mod Usuarios' name='mUsuarios' id='mUsu' class='button-adm'>
                    </div>
                    <div>
                        <input type='button' value='Del Usuarios' name='dUsuarios' id='dUsu' class='button-adm'>
                    </div>
                    <br/>
            -->        
                    <div>
                        <input type='button' value='Videos' name='videos' id='video' class='button-adm'><span><?php echo $numVideo ?></span>
                    </div>
           <!--          
                     <div>
                        <input type='button' value='New Videos' name='nVideos' id='nVideos' class='button-adm'>
                    </div>                   
                    <div>
                        <input type='button' value='Mod Videos' name='mVideos' id='mVideos' class='button-adm'>
                    </div>
                    <div>
                        <input type='button' value='Del Videos' name='dVideos' id='dVideos' class='button-adm'>
                    </div>
                    <br/>
            -->        
                    <div>
                        <input type='button' value='Comentarios' name='comentarios' id='comment' class='button-adm'><span><?php echo $numCommnent ?></span>                    
                    </div>
            <!--          
                     <div>
                        <input type='button' value='New Comentarios' name='nComment' id='nComment' class='button-adm'>
                    </div>                   
                    <div>
                        <input type='button' value='Mod Comentarios' name='mComment' id='mComment' class='button-adm'>
                    </div>
                    <div>
                        <input type='button' value='Del Comentarios' name='dComment' id='dComment' class='button-adm'>
                    </div>
                    <br/>
             -->       
                   	<div>
                        <input type='button' value='Registros' name='regs' id='regs' class='button-adm'><span><?php echo $numRegs ?></span>                    
                    </div>
                    <br/>
                    <br/>
                    <div>
                    	<input type='button' value='Cerrar Sesion' name='closeSesion' id='closeSesion'>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div> 
      
<!--
       <div class="" id="">
      	<div class="container">
        	<div class="row">
            	<div class="col-lg-8">
            	</div>
        	</div> 
      	</div>
      </div>
-->  