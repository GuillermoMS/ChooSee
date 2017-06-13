
<div class="container cont-videos" id="cont-videos">
    <div id="cont-videos-search">
        <div>
            <h3><?php echo $numVideos-1?> Resultados</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                $numV =$numVideos -1;
                $ul= $numV/2;
                $ul=round($ul);



                    echo "<ul id='ul1'>";
                        for ($i = 0; $i < $ul; $i++) {
                            $ago = timeToOld($date_most_view[$i]);
                            require(PATH_src_view . 'v_videosS.php');
                        }
                    echo "</ul>";
                    echo "<ul id='ul2'>";
                        for ($i = $ul; $i < $numV; $i++) {
                            $ago = timeToOld($date_most_view[$i]);
                            require(PATH_src_view . 'v_videosS.php');
                        }
                    echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</div>






