<div class="cont-cont" id="cont">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="cont-data-profile">
                    <div class="container">
                        <div class="row" id="cont-cont-personal">

                            <div class="col-sm-6">
                                <div id="cont-img-profile">
                                    <img src=
                                         <?php
                                            echo "../../mm/img/".$user->getEmail()."/".$user->getProfilePhoto();
                                         ?>
                                         alt="profilePhtono" class="img-responsive img-center"
                                    >
                                    <div id="cont-mod-img-info"><p>Para modificar tu imagen de perfil pincha en ella.</p></div>
                                    <div id="cont-mod-img">
                                        <form enctype="multipart/form-data" class="formulario" id="form-img-profile">
                                            <button type="button" value="Subir imagen" id="btn-mod-img" class="glyphicon glyphicon-upload"></button>
                                            <div id="cont-btn-file-img">
                                                <button  class="glyphicon glyphicon-open-file"></button>
                                                <input name="data-img-profile" type="file" id="btn-file-img">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="errorUpImg"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="cont-text-profile">
                                    <ul>
                                        <li><p>Nombre: <span id="profile-name"><?php echo $user->getName();?></span></p></li>
                                        <li><p>Apellidos: <span id="profile-lastname"><?php echo$user->getlastName();?></span></p></li>
                                        <li><p>Nick: <span id="profile-nick"><?php echo $user->getNick();?></span></p></li>
                                        <li><p>Email: <span id="profile-email"><?php echo $user->getEmail();?></span></p></li>
                                        <li><p>Descripción: <span id="profile-description"><?php echo $user->getDescription();?></span></p></li>
                                    </ul>
                                </div>
                                <div id="cont-mod-profile">
                                    <button type="button" value="" id="mod-profile" class="glyphicon glyphicon-pencil"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cont-btn-menu-profile">
                <div class="col-sm-3">
                    <th class=""><input type="button" value="Mis videos <?php  echo" (".$numVideos.") "; ?>" id="btn-all-videos"></th>
                </div>
                <div class="col-sm-3">
                    <th class=""><input type="button" value="Subir video" id="btn-upVideo"></th>
                </div>
                <div class="col-sm-3">
                    <input type="button" value="Comentarios  <?php  echo" (".$numCommentNotMy.") "; ?>" id="btn-all-my-comment-video">
                </div>
                <div class="col-sm-3">
                    <input type="button" value="Mis comentarios  <?php  echo" (".$numComment.") "; ?>" id="btn-all-my-comment">
                </div>
            </div>
            <div class="col-sm-12">
                <div id="cont-info-my-video">
                    <div id="last-my-video" class="table-responsive">
                        <h3>Mis ultimos videos</h3>
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <td>Num</td>
                                <td>Nombre</td>
                                <td>Imagen</td>
                                <td>Tipo</td>
                                <td>Descripcion</td>
                                <td>Fecha</td>
                                <td>Tags</td>
                                <td>Likes</td>
                                <td>Dislikes</td>
                                <td>Reproduciones</td>
                            </tr>
                        <?php
                            $num=0;
                            foreach ($fiveDateVideo as $dt){
                                $num++;
                                 if($dt!=false) {
                                    echo "                            
                                        <tr>
                                            <td>" . $num . "</td>
                                            <td>" . $dt['name'] . "</td>
                                            <td>" . $dt['img'] . "</td>
                                            <td>" . $dt['typeVideo'] . "</td>
                                            <td>" . $dt['description'] . "</td>
                                            <td>" . $dt['dateUp'] . "</td>
                                            <td>" . $dt['tags'] . "</td>
                                            <td>" . $dt['likes'] . "</td>
                                            <td>" . $dt['dislikes'] . "</td>
                                            <td>" . $dt['numPlay'] . "</td>
                                        </tr>
                                    ";
                                 }
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="most-view-my-video" class="table-responsive">
                        <h3>Mis videos mas vistos</h3>
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <td>Num</td>
                                <td>Nombre</td>
                                <td>Imagen</td>
                                <td>Tipo</td>
                                <td>Descripcion</td>
                                <td>Fecha</td>
                                <td>Tags</td>
                                <td>Likes</td>
                                <td>Dislikes</td>
                                <td>Reproduciones</td>
                            </tr>
                            <?php
                            $num=0;
                            foreach ($fiveMostViewVideo as $dt){
                                $num++;
                                if($dt!=false) {
                                    echo "                            
                                    <tr>
                                        <td>".($num)."</td>
                                        <td>".$dt['name']."</td>
                                        <td>".$dt['img']."</td>
                                        <td>".$dt['typeVideo']."</td>
                                        <td>".$dt['description']."</td>
                                        <td>".$dt['dateUp']."</td>
                                        <td>".$dt['tags']."</td>
                                        <td>".$dt['likes']."</td>
                                        <td>".$dt['dislikes']."</td>
                                        <td>".$dt['numPlay']."</td>
                                    </tr>
                                 ";
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

