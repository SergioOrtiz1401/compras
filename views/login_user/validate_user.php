    <div class="container margin">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url('/minutas/img/avatar_2x.png'); ?> "/>
            <p id="profile-name" class="profile-name-card"></p>
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Usuario" id="user" name="user" type="text" autofocus="">
                <div class="validation_user"></div>
                <input class="form-control" placeholder="Contraseña" id="password" name="password" type="password"  autocomplete="off" >
                <div class="validation_password"></div>
                <input type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="form_login" value="Iniciar Sesión" />
                <div class="validation_credenciales"></div>
        </div><!-- /card-container -->
    </div> <!-- container -->
    <!-- Modal -->
    <div class="modal fade" id="mensaje_usuario" tabindex="-1" role="dialog" aria-labelledby="mensaje_usuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-orange">
                    <h5 class="modal-title" id="mensaje_usuario">Advertencia.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Su usuario o contraseña son incorrectos, favor de verificarlos.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>