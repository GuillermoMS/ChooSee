<div class="cont-cont" id="cont">
    <div id="cont-play">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div id="play">
                        <video controls autoplay loop controlsList="<?php echo $download;?>" class="embed-responsive-item">
                            <source src="../../mm/video/<?php echo $path ?>" type="video/mp4" id="<?php echo $idVideo?>">
                        </video>
                    </div>
                    <div id="text-play">
                        <p id="nameVideo"><?php echo $name?></p>
                        <p id="autorVideo"><?php echo $autor?></p>
                        <p id="descriptionVideo">Descripcion: <?php echo $description?></p>
                        <p id="nPlayVideo">Visto: <?php echo $nPlay?> veces</p>
                        <p id="timeVideo">Hace: <?php echo $days?></p>
                        <p><span id="likes" class="glyphicon glyphicon-hand-up"><?php echo $like?></span><span id="disLikes" class="glyphicon glyphicon-hand-down"><?php echo  $disLikes?></span></p>
                        <p>Licencia: <?php echo $licence ?></p>
                        <i id="copy-legend" class="glyphicon glyphicon-question-sign" title="Información sobre licencias."></i>
                        <input type="button" id="comment" value="Ver comentarios (<?php if((int)$numComment>99) echo "+99"; else echo $numComment[0][0];?>)">
                    </div>
                    <div id="cont-comment">
                        <?php require_once PATH_src_view."v_comments.php"?>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
</div>




