<h3>Comentarios</h3>
<table class="table table-striped table-hover">
    <tbody>
    <tr>
        <td>Num</td>
        <td>Comentario</td>
        <td>Fecha</td>
        <td>Video</td>

    </tr>
    <?php
    $num=0;
    foreach ($allMyCommentVideo as $dt){
        if($dt['idUser']!=$_SESSION['idUser']){
            if($dt!=false){
                $num++;
                echo "                            
                <tr>
                    <td>".$num."</td>
                    <td>".$dt['comment']."</td>
                    <td>".$dt['date']."</td>
                    <td>".$dt['nameVideo']."</td>
                </tr>
            ";
            }
        }
    }
    ?>
    </tbody>
</table>