<h3>Mis comentarios</h3>
<div id="cont-msgDelComment"></div>
<table class="table table-striped table-hover">
    <tbody>
    <tr>
        <td>Num</td>
        <td>Comentario</td>
        <td>Fecha</td>
        <td></td>

    </tr>
    <?php
    $num=0;
    foreach ($allMyComment as $dt){
        if($dt!=false){
            $num++;
            echo "                            
                <tr>
                    <td>".$num."</td>
                    <td>".$dt['comment']."</td>
                    <td>".$dt['date']."</td>
                    <td><button class='glyphicon glyphicon-trash btnDelMyComment' value='".$dt['idComment']."'></button></td>
                </tr>
            ";
        }
    }
    ?>
    </tbody>
</table>