<div style="margin-right: 2%">
<div class="row">
    <div class="col-md-2">
        <ul class="list-group">
            <li class="list-group-item bg-secondary titulo_lista" data-toggle="collapse" data-target="#usuarios"><a href="#" class="titulo_lista">Empleado(s)</a ></li>
            <div id="usuarios" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/nuevousuario/crear_nuevo_usuario') ?>">Registrar Nuevo Empleado</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/nuevousuario/editar_usuario') ?>">Editar Empleado</a></li>
                </ul>
            </div>
            <li class="list-group-item bg-secondary titulo_lista" data-toggle="collapse" data-target="#importadores"><a href="#" class="titulo_lista">Importadores</a ></li>
            <div id="importadores" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/importadores') ?>">Importar imagenes</a></li>
                    <!-- mala lectura del archivo txt para realizar la importación se realizara a mano
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/importadores/importar_empleados') ?>">Importar Empleados</a></li>-->
                </ul>
            </div>
            <li class="list-group-item bg-secondary titulo_lista" data-toggle="collapse" data-target="#captura_informacion"><a href="#" class="titulo_lista">Captura de Información</a ></li>
            <div id="captura_informacion" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/capturainformacion/captura_departamento') ?>">Departamentos</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/capturainformacion/captura_macroprocesos') ?>">Macroporcesos</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/capturainformacion/captura_nivel_departamento') ?>">Nivel de Departamento</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/capturainformacion/captura_proceso_departamento') ?>">Proceso de Departamento</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/capturainformacion/captura_puesto') ?>">Puesto</a></li>
                </ul>
            </div>
            <li class="list-group-item bg-secondary titulo_lista" data-toggle="collapse" data-target="#dpt_compras"><a href="#" class="titulo_lista">Dpt. Compras</a ></li>
            <div id="dpt_compras" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/permisos') ?>">Permisos</a></li>
                    <li class="list-group-item"><a href="#" class="sub_lista" data-url="<?php echo base_url('administrador_sistemas/presupuestos/crear_presupuesto') ?>">Presupuestos</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item iframe_administrador" src="<?php echo base_url('administrador_sistemas/nuevousuario/welcome_administrador/') ?>" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


</div>