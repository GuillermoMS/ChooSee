
<div id="cont-newCommet">
    <textarea name="newComment" id="newComment"></textarea>
    <input type="hidden" id="idVideo" value="<?php echo $idVideo?>">
    <button class="glyphicon glyphicon-plus" id="btn-newComment" title="Añadir nuevo comentario"></button>
    <p id="msgNewComment"></p>
</div>
<div id="comments">
    <?php
    $hoy = new DateTime(date("y-m-d"));
    foreach ($comments as $comm){
        if($comm!=null) {
            $date = new DateTime($comm['date']);
            $time = $date->diff($hoy);

            $days = $time->format('%d días');

            if($days>31)
                $times = $time->format('%m mes, %d días');
            else if($days>365)
                $times = $time->format('%y años, %m mes, %d días');
            else
                $times = $time->format('%d días');

            echo "<div class='comment' id='".$comm['idComment']."'>
                                    <p class='textComment'>" . $comm['comment'] . "</p>
                                    <p class='dataComment'>" . $comm['nick'] . "<span> hace: " . $times . "</span></p>
                                  ";
            if(isset($_SESSION['idUser'])) {
                if ($comm['idUser'] == $_SESSION['idUser']) {
                    echo '<div class="btns-comment"><button class="btn-delComment"><span class="glyphicon glyphicon-trash" title="Eliminar commentario"></span></button>
                          <button class="btn-modComment"><span class="glyphicon glyphicon-edit" title="Editar comentario"></span></button>
                          <button class="btn-editComment"><span class="glyphicon glyphicon-ok" title="Guardar cambios"></span></button></div>';
                }
            }
            echo"</div>";
        }
    }
    ?>
</div>

<?php
    echo'<script src="../js/js_openComment.js"></script>';
    echo'<script src="../js/js_newComment.js"></script>';
    echo'<script src="../js/js_viewEditComment.js"></script>';
    echo'<script src="../js/js_editComment.js"></script>';
    echo'<script src="../js/js_delComment.js"></script>';
?>


