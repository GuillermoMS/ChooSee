<div id="videos">
	<p class="title_videos"> Videos:</p>
    <table class="table table-sm">
    	<thead>
            <tr class="bg-primary">
                <th>idVideo</th>
                <th>idUser</th>
                <th>Name</th>
                <th>Date</th>
                <th>Path</th>
                <th>Imagen</th>
                <th>Type Video</th>
                <th>Description</th>
                <th>Date</th>
                <th>Tags</th>
                <th>Likes</th>
                <th>Dislikes</th>
                <th>Num Play</th>
                <th>Published</th>
            </tr>
        </thead>
        <tbody>
    <?php        		
    foreach($videos as $registro){
		$dateVideo = explode(" ", $registro['date']);
        if($registro){
            echo "<tr>
                    <td>".$registro['idVideo']."</td>
                    <td>".$registro['idUser']."</td>
                    <td>".$registro['name']."</td>
                    <td>".$registro['path']."</td>
					<td>".$registro['img']."</td>
                    <td>".$registro['typeVideo']."</td>
                    <td>".$registro['description']."</td>
                    <td>".$registro['date']."</td>
                    <td>".$registro['tags']."</td>
                    <td>".$registro['likes']."</td>
                    <td>".$registro['dislikes']."</td>
                    <td>".$registro['numPlay']."</td>
                    <td>".$registro['published']."</td>
					<td class='btn-bane'>";
			if($registro['published']==0)
			  	echo "<img src='../../mm/img/app/down.png' alt='baja' title='Dar de baja' id='".$registro['idUser']."'";
			else 
				echo "<img src='../../mm/img/app/up.png' alt='alta' title='Dar de alta' id='".$registro['idUser']."'";
          	  echo "<td>";
			if($dateVideo[0]==(string)date('Y-m-d')){
					echo "<td class='newReg'>New </td>";
				}	
		    echo"</tr>";									
        }
    }
    ?>	
    	</tbody>
    </table>
</div>