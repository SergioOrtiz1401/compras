<div >
<input type="hidden" class="usuario" value="<?php if(isset($_COOKIE['id_usuario'])){ echo $_COOKIE['id_usuario'];} ?>">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php if((isset($_COOKIE['administrador']))&&($_COOKIE['administrador']!=0)){echo base_url('minutas/administrador');}else{echo base_url('minutas');} ?>">Inicio</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Sergio<span class="sr-only">(current)</span></a>
            </li>-->
        </ul>

        <ul class="nav justify-content-end">
            <li class="nav-item">
                    <div class="btn-group menu_cambio_direccion dropleft">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi Cuenta
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../../micuenta/usuario/<?php if(isset($_COOKIE['id_usuario'])){ echo $_COOKIE['id_usuario'];}else{ echo '0';} ?>">Mi Cuenta</a>
                        <a class="dropdown-item" href="../../micuenta/mis_tareas/<?php if(isset($_COOKIE['id_usuario'])){ echo $_COOKIE['id_usuario'];}else{ echo '0';} ?>">Mis tareas</a>
                        <?php if((isset($_COOKIE['administrador']))&&($_COOKIE['administrador']!=0)){ ?>
                            <a class="dropdown-item cerrar_sesion_administrador cerrar_sesion" href="<?php echo base_url('minutas/administrador/') ?>">Cerrar Sesión</a>
                        <?php }else{ ?>
                            <a class="dropdown-item cerrar_sesion" href="<?php echo base_url('minutas') ?>">Cerrar Sesión</a>
                        <?php } ?>
                    </div>
                </div>
            </li>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                </li>
            </ul>
        </ul>
    </div>
</nav>
</div>