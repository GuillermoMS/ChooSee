<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="cont-title-upVideo">
                <h3>Sube tu video </h3>
            </div>
        </div>

        <div class="col-sm-12">
            <div id="cont-btns-upVideo">
                <label for="title">Titulo</label>
                <input type="text" value="Titulo" name="title" id="nameVideoUp">
                <label for="desc">Descripción</label>
                <input type="text" value="Descripcion" name="desc" id="descVideo">
                <label for="copy">Licencia</label>
                <select name="copy"  id="copyUpVideo">
                    <option value="0" selected>Creative Commons</option>
                    <option value="1">Copyleft</option>
                    <option value="2">Copyright</option>
                </select>
                <i id="copy-legend" class="glyphicon glyphicon-question-sign" title="Información sobre licencias."></i>
                <label for="files">Selecciona la imagen y el video</label>
                <input name="files" type="file" id="filesUpVideo"  multiple="multiple">
                <input type="button" id="btn-up-upVideo" value="Subir" name="newVideo">
            </div>
            <div id="cont-error-up"><p id="error-up"><?php if(isset($er))echo $er ?></p></div>
        </div>

        <div class="col-sm-12">
            <div id="cont-text-upVideo">
                <p>Nota: ten en cuenta que cuanto más ocupe tu video más tardará en subirse, limite de 1GB.</p>
                <p>Las extensiones permitidas son: OGG, MP4 o WEBM .</p>
            </div>
        </div>
    </div>
</div>


