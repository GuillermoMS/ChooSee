<div id="users">
	<p class="title-users"> Users:</p>
    <table class="table table-sm">
    	<thead>
            <tr class="bg-primary">
                <th>Rol</th>
                <th>Email</th>
                <th>Date</th>
                <th>Nick</th>
                <th>Description</th>
                <th>Lenguaje</th>
                <th>Num Videos</th>
                <th>Num Comments</th>
                <th>Imagen</th>
                <th>Bane</th>
            </tr>
        </thead>
        <tbody>
    <?php        		
    foreach($users as $registro){
		$dateUser = explode(" ", $registro['date']);
        if($registro){
            echo "<tr>
                    <td>".$registro['rol']."</td>
                    <td>".$registro['email']."</td>
                    <td>".$registro['date']."</td>
                    <td>".$registro['nick']."</td>
                    <td>".$registro['description']."</td>
                    <td>".$registro['lenguaje']."</td>
                    <td>".$registro['nVideo']."</td>
                    <td>".$registro['nComment']."</td>
                    <td>".$registro['profilePhoto']."</td>
                    <td>".$registro['bane']."</td>
					<td class='btn-bane'>";
			if($registro['bane']==0)
			  	echo "<img src='../../mm/img/app/down.png' alt='baja' title='Dar de baja' id='".$registro['idUser']."'";
			else 
				echo "<img src='../../mm/img/app/up.png' alt='alta' title='Dar de alta' id='".$registro['idUser']."'";
          	  echo "<td>";
			if($dateUser[0]==(string)date('Y-m-d')){
					echo "<td class='newReg'>New </td>";
				}	
		    echo"</tr>";
        }
    }
    ?>
    	</tbody>		
    </table> 
    
    
    
    
</div>