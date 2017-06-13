<h3>Mis videos</h3>
<div id="cont-msgDelVideo"></div>
<table class="table table-striped table-hover">
    <tbody>
    <tr>
        <td>Num</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Fecha</td>
        <td>Likes</td>
        <td>Dislikes</td>
        <td>Reproduciones</td>
        <td></td>
    </tr>
    <?php
    $num=0;
    foreach ($allVideos as $dt){
        $num++;
        if($dt!=false) {
            echo "                            
                <tr id='hola'>
                    <td>" . $num . "</td>
                    <td>" . $dt['name'] . "</td>
                    <td>" . $dt['description'] . "</td>
                    <td>" . $dt['dateUp'] . "</td>
                    <td>" . $dt['likes'] . "</td>
                    <td>" . $dt['dislikes'] . "</td>
                    <td>" . $dt['numPlay'] . "</td>
                    <td><button class='glyphicon glyphicon-trash btnDelMyVideo' value='".$dt['idVideo']."'></button></td>
                </tr>
            ";
        }
    }
    ?>
    </tbody>
</table>