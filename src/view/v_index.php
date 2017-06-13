<div class="cont-cont" id="cont">
    <div class="container">
        <div class="row">
            <div class="col-ms-12">
                <div class="cont-videos" id="cont-videos">
                    <div id="cont-title-most">
                        <h3>Más Nuevos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="cont-videos-most">
            <div class="row">
                <?php
                    for ($i=0;$i<6;$i++){
                        $ago = timeToOld($date_most_date[$i]);
                        require(PATH_src_view.'v_most_date.php');
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-ms-12">
                <div class="cont-videos" id="cont-videos">
                    <div id="cont-title-most">
                        <h3>Más Vistos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="cont-videos-most">
            <div class="row">
                <?php
                    for ($i=0;$i<6;$i++){
                        $ago = timeToOld($date_most_view[$i]);
                        require(PATH_src_view . 'v_most_view.php');
                    }
                ?>
            </div>
        </div>
    </div>
</div>








