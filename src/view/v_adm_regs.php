<div id="cont-regs">
    <p class="title_regs"> Registers:</p>
    <table class="table table-sm">
        <thead>
            <tr class="bg-primary">
                <th>idReg</th>
                <th>idUser</th>
                <th>idVideo</th>
                <th>Type Video</th>
                <th>Tags</th>
                <th>Likes</th>
                <th>Dislikes</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php        		
        foreach($regs as $registro){
			$dateReg = explode(" ", $registro['date']);
			if($registro){
				echo "
				<tr>
					<td>".$registro['idReg']."</td>
					<td>".$registro['idUser']."</td>
					<td>".$registro['idVideo']."</td>
					<td>".$registro['typeVideo']."</td>
					<td>".$registro['tags']."</td>
					<td>".$registro['likes']."</td>
					<td>".$registro['disLikes']."</td>
					<td>".$registro['date']."</td>";
					
				if($dateReg[0]==(string)date('Y-m-d')){
					echo "<td class='newReg'>New </td>";
				}	
				echo"
				</tr>";
			}
        }
        ?>
      </tbody>	
    </table>
</div>