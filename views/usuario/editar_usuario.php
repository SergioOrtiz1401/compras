<div style="padding-right: 1%">
<p>Buscar empleado:</p>
    <div class="row" style="margin-right: auto">
        <div class="col">
            <input type="text" class="form-control numero_empleado" name="no_empleado" value="<?= @$no_empleado ?>" placeholder="# de empleado">
        </div>
        <div class="col">
            <input type="text" class="form-control nombre_apellido" name="nombre_apellido" value="<?= @$nombre_apellido ?>" placeholder="Nombre y Apellido">
        </div>
        <div class="col">
            <input type="text" class="form-control iniciales_empleado" name="iniciales" value="<?= @$iniciales ?>" placeholder="Iniciales">
        </div>
    </div>
    <button type="submit" class="btn btn-secondary mb-2 buscar_info">buscar</button>
<br/>
<br/>
<br/>
<div class="mostrar_resusltados_busqueda" style="display:none">
    <input type="hidden" class="id_usuario_editar" >
<p>Editar Empleado Cartonera Plastica</p>
    <div class="form-row" style="margin-right: auto">
        <div class="form-group col-md-4">
            <label for="nombres">Nombre(s)</label>
            <input type="text" class="form-control nombres" id="nombres" name="nombres" placeholder="Ejemplo: Sergio Alberto" required>
            <div class="validation_nombre"></div>
        </div>
        <div class="form-group col-md-4">
            <label for="ap_pat">Apellido Paterno</label>
            <input type="text" class="form-control ap_pat" id="ap_pat" name="ap_pat" placeholder="Ejemplo: Ortiz" required>
            <div class="validation_appat"></div>
        </div>
        <div class="form-group col-md-4">
            <label for="ap_mat">Apellido Materno</label>
            <input type="ap_mat" class="form-control ap_mat" id="ap_mat" name="ap_mat" placeholder="Ejemplo: Guerrero" required>
            <div class="validation_apmat"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="titulo_profesional">Titulo Profesional</label>
            <select id="titulo_profesional" class="form-control titulo_profesional" required>
                <option selected>Seleccione..</option>
                <?php
                foreach ($titulo_profesional as $titulo){
                    ?>

                    <option value="<?= $titulo->id_titulo ?>"><?= $titulo->titulo?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_titulo_profesional"></div>
        </div>
        <div class="form-group col-md-4">
            <label for="no_empleado">Numero de Empleado</label>
            <input type="text" class="form-control no_empleado" id="no_empleado" name="no_empelado" placeholder="Ejemplo: 13576453">
            <div class="validation_no_empleado"></div>
        </div>
        <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <select id="tipo" class="form-control tipo" required>
                <option selected>Seleccione..</option>
                <?php
                foreach ($tipo as $tipos){
                    ?>

                    <option value="<?= $tipos->id_tipo ?>"><?= $tipos->tipo?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_titulo_profesional"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="correo">Correo</label>
            <input type="correo" class="form-control correo" name="correo" id="correo" placeholder="Ejemplo: ejemplo@cartoneraplastica.com" disabled>
            <div class="validation_correo"></div>
        </div>
        <div class="form-group col-md-4">
            <label for="sexo">Sexo</label>
            <div class="form-check form-check">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo_f" value="1">
                <label class="form-check-label" for="inlineRadio1">Femenino</label>
            </div>
            <div class="form-check form-check">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo_m" value="2">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
            <div class="validation_sexo"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control telefono" name="telefono" id="telefono" placeholder="Ejemplo: 5568973912" minlength="0">
            <div class="validation_telefono"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="departamentos">Departamento</label>
            <select id="departamentos" class="form-control departamentos">
                <option selected>Seleccione..</option>
                <?php
                foreach ($departamentos as $departamento){
                    ?>

                    <option value="<?= $departamento->id_departamento ?>"><?= $departamento->departamento?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_departamentos"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nivel">Nivel Departamental</label>
            <select id="nivel" class="form-control nivel">
                <option selected>Seleccione..</option>
                <?php
                foreach ($nivel_departamento as $nivel){
                    ?>

                    <option value="<?= $nivel->id_nivel ?>"><?= $nivel->nivel?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_nivel"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="proceso_departamento">Proceso del Departamento</label>
            <select id="proceso_departamento" class="form-control proceso_departamento">
                <option selected>Seleccione..</option>
                <?php
                foreach ($proceso_departamento as $proceso){
                    ?>

                    <option value="<?= $proceso->id_proceso ?>"><?= $proceso->proceso?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_proceso_departamento"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="macroprocesos">Macroprocesos</label>
            <select id="macroprocesos" class="form-control macroprocesos">
                <option selected>Seleccione..</option>
                <?php
                foreach ($macroprocesos as $macroproceso){
                    ?>

                    <option value="<?= $macroproceso->id_macroproceso ?>"><?= $macroproceso->macroproceso?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_macroprocesos"></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="perfil_sistema">Perfil para el SISTEMA</label>
            <select id="perfil_sistema" class="form-control perfil_sistema">
                <option selected>Seleccione..</option>
                <?php
                foreach ($perfil_sistema as $perfil){
                    ?>

                    <option value="<?= $perfil->id_perfil ?>"><?= $perfil->perfil?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_perfil_sistema"></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="puesto">Puesto</label>
            <select id="puesto" class="form-control puesto">
                <option selected>Seleccione..</option>
                <?php
                foreach ($puesto_ocupar as $puesto){
                    ?>

                    <option value="<?= $puesto->id_puesto ?>"><?= $puesto->siglas_puesto?></option>
                    <?php
                }
                ?>

            </select>
            <div class="validation_puesto"></div>
        </div>
    </div>
    </div>
<div class="form-row">
    <div class="form-group col-md-4">
<center>
        &nbsp;<button type="submit" class="btn btn-primary guardar_modificacion" style="display: none">Guardar</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger eliminar_empleado" style="display: none">Eliminar</button>
</center>
    </div>
</div>

</div>

    <div class="modal fade" id="mensaje_guardar_empleado" tabindex="-1" role="dialog" aria-labelledby="mensaje_guardar_empleado" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cambiar_color_mensaje ">
                    <h5 class="modal-title" id="mensaje_guardar_empleado">Atención Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mensaje_guardar">
                    No cuentas con un perfil correcto para este modulo del sistema, si se trata de un error contacta a un ADMINISTRADOR.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="mensaje_eliminar_empleado" tabindex="-1" role="dialog" aria-labelledby="mensaje_eliminar_empleado" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header cambiar_color_mensaje alert-mensaje-correcto">
                <h5 class="modal-title" id="mensaje_eliminar_empleado">Atención Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mensaje_guardar">
                Se ha eliminado los registros del empleado.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
</div>
