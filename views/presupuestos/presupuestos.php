<?php
/**
 * Created by PhpStorm.
 * User: SergioOrtiz
 * Date: 06/12/2018
 * Time: 01:18 PM
 */
?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="text-center">Presupuestos para el Sistema de Compras</h3>
        </div>
    </div>
</div>
<div class="contenedor_imagen">
    <br/>
    <form>
        <div class="margin_permisos">
        <div class="form-row" style="margin-right: auto">
            <div class="form-group col-md-4">
                <label for="departamento">Departamento</label>
                <select id="departamento" name="departamento" class="form-control departamento" required>
                    <option selected>Seleccione..</option>
                    <?php
                    foreach ($departamentos as $departamento){
                        ?>

                        <option value="<?= $departamento->id_departamento ?>"><?= $departamento->departamento?></option>
                        <?php
                    }
                    ?>

                </select>
                <div class="validation_departamento"></div>
            </div>
            <div class="form-group col-md-4">
                <label for="centro_costo">Centro de Costo</label>
                <select id="centro_costo" name="centro_costo" class="form-control centro_costo" required>
                    <option selected>Seleccione..</option>
                    <?php
                    foreach ($centro_costo as $centro){
                        ?>

                        <option value="<?= $centro->id_costo ?>"><?= $centro->unidad_organiza?></option>
                        <?php
                    }
                    ?>

                </select>
                <div class="validation_centro_costo"></div>
            </div>
        </div>
        </div>
    </form>
</div>

<div class="modal fade" id="mensaje_guardar_permisos" tabindex="-1" role="dialog" aria-labelledby="mensaje_guardar_permisos" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header cambiar_color_mensaje ">
                <h5 class="modal-title" >Atención Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mensaje_guardar">
                Los permisos asignados se han editado de manera correcta.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>