
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="cont-reg" id="cont-reg-text">
				<h3>Registrate ahora.</h3>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="cont-reg" id="cont-reg">
                <form id="form-regis" enctype="multipart/form-data">
                    <div class="cont-input-register"><span class="glyphicon glyphicon-envelope"></span><input type="text" name="email" id="email" placeholder="Email" ><p>*</p></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-envelope"></span><input type="text" name="cemail" id="cemail" placeholder="Confirmar Email" ><p>*</p></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-qrcode"></span><input type="password" name="pass" id="pass" placeholder="Contraseña" ><p>*</p></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-qrcode"></span><input type="password" name="cpass" id="cpass" placeholder="Confirmar contraseña" ><p>*</p></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-user"></span><input type="text" name="name" id="name" placeholder="Nombre"></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-tag"></span><input type="text" name="lastname" id="lastname" placeholder="Apellidos"></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-star"></span><input type="text" name="nick" id="nick" placeholder="Nick" ><p>*</p></div>
                    <div class="cont-input-register"><span class="glyphicon glyphicon-list-alt"></span><input type="text" name="desc" id="desc" placeholder="Descripción"></div>
                    <div class="cont-input-register"><span id="condition-legal" class="glyphicon glyphicon-question-sign" title="Condiciones legales."></span><label for="condition">Acepto las condiciones</label><input type="checkbox" value="1" name="condition" id="condition" ><p>*</p></div>
                    <div class="cont-input-register"><span ></span><input type="submit" value="Registrar" id="regis"><p id="leyendCondition">Campos obligatoriros</p><p>*</p></div>
                </form>
			</div>
		</div>
        <div class="col-sm-12">
            <div id="cont-error-msg">
                <p id="error-msg">
                    <?php $msgRegister?>
                </p>
            </div>
        </div>
	</div>
</div>

<input type="hidden" name="date" value=<?php date('Y-m-d')?>>
