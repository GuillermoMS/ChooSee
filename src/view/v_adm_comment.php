<div id="cont-regs">
    <p class="title_regs"> Registers:</p>
    <table class="table table-sm">
        <thead>
            <tr class="bg-primary">
                <th>idCommnent</th>
                <th>idUser</th>
                <th>idVideo</th>
                <th>Date</th>
                <th>Comment</th>
                <th>published</th>
            </tr>
        </thead>
        <tbody>
        <?php        		
        foreach($comments as $registro){
			if($registro){
				$dateReg = explode(" ", $registro['date']);
				
			echo "<tr>
					<td>".$registro['idCommnent']."</td>
					<td>".$registro['idUser']."</td>
					<td>".$registro['idVideo']."</td>
					<td>".$registro['date']."</td>
					<td>".$registro['comment']."</td>
					<td>".$registro['published']."</td>
					<td class='btn-bane'>";
			if($registro['published']==0)
			  	echo "<img src='../../mm/img/app/down.png' alt='baja' title='Dar de baja' id='".$registro['idUser']."'";
			else 
				echo "<img src='../../mm/img/app/up.png' alt='alta' title='Dar de alta' id='".$registro['idUser']."'";
          	  echo "<td>";
			if($dateReg[0]==(string)date('Y-m-d')){
					echo "<td class='newReg'>New </td>";
				}	
		    echo"</tr>";
			}
        }
        ?>
      </tbody>	
    </table>
</div>