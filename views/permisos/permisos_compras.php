<?php
/**
 * Created by PhpStorm.
 * User: SergioOrtiz
 * Date: 05/11/2018
 * Time: 06:39 PM
 */
?>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="text-center">Permisos para el Sistema de Compras</h3>
        </div>
    </div>
</div>
<div class="contenedor_imagen">
    <br/>
    <div class="row margin_permisos">
        <div class="col-3">
            <input type="text" class="form-control numero_empleado" placeholder="No. Empleado">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-secondary buscar_empleado_permisos">Buscar</button>
        </div>
        <div class="col-3">
            <input type="text" class="form-control empleado_usuario" placeholder="Usuario" readonly>
        </div>
        <div class="col-3">
            <input type="text" class="form-control empleado_departamento" placeholder="Departamento" readonly>
        </div>
    </div>
    <br/>
<form id="formulario_permisos">
    <input type="hidden" name="id_usuario" class="id_usuario"/>
    <div class="margin_permisos">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <?php
                    foreach($menu_principal as $principal) {
                        ?>
                        <input type="hidden" class="menu_principal_<?= $principal->id_menu_principal ?>" />
                        <div>
                            <table>
                                <tr>
                                    <td>
                                        <input value="<?=$principal->id_menu_principal ?>" type="checkbox" class="list-group-item bg-secondary buscar_menu_secundario menu_principal marcar_principal_<?=$principal->id_menu_principal ?>" data-principal="<?=$principal->id_menu_principal ?>" data-toggle="collapse"
                                   data-target="#<?= $principal->nombre_menu_principal ?> ">
                                    </td>
                                    <td><b class="buscar_menu_secundario" data-toggle="collapse" data-target="#<?= $principal->nombre_menu_principal ?> "><?= $principal->descripcion_principal ?></b>
                                    </td>
                                </tr>
                            </table>
                        </div>
                            <div id="<?= $principal->nombre_menu_principal ?>" class="collapse">
                            <ul class="list-group">
                                <?php
                                foreach($menu_secundario as $secundario) {
                                    if($principal->id_menu_principal==$secundario->id_menu_principal) {
                                        ?>
                                        <div>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" value="<?=$secundario->id_menu_secundario ?>" class="menu_secundario marcar_secundario_<?=$secundario->id_menu_secundario ?>" data-principal="<?= $secundario->id_menu_principal ?>" /> <?= $secundario->descripcion_secundario ?>
                                        </div>
                                        <?php
                                    }
                                }?>
                            </ul>
                        </div>
                        <?php
                    }?>
                </ul>
            </div>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary guardar_permisos">Guardar</button>
        <br/>
        <br/>
        <br/>
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