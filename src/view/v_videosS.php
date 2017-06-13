<li>
    <div class="cont-video">
        <a id="<?php  if(isset($video[$i])) echo $video[$i]?>">
            <img src="<?php  if(isset($img[$i])) echo "../../mm/img/".$img[$i]?>" alt="">
        </a>
    </div>
    <div class="cont-info-video">
        <p class="nameVideoPlay"><?php echo$name[$i]?> </p>
        <p class="autorVideoPlay"><?php echo $nameUser[$i]?> </p>
        <p class="numVideoPlay"><?php echo "Visto: ".$numPlay[$i]." veces."?> </p>
        <p class="dateVideoPlay"><?php echo "Hace: ".$ago?> </p>
    </div>
</li>

