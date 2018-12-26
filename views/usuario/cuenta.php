<div class="media micuenta">
        <div class="media mt-3">
            <a class="pr-3 " href="#" >
                <img src="<?php echo base_url('minutas/img/perfil_usuario/avatar_2x.png'); ?>" alt="Generic placeholder image" >
            </a>
            <div class="media-body">
                <h5 class="mt-0"><?= $info->titulo.': '.$info->primer_nombre.' '.$info->segundo_nombre.' '.$info->ap_pat.' '.$info->ap_mat.' ('.$info->iniciales.')' ?></h5>
                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <th scope="row">Numero de Empleado: </th>
                        <td colspan="2"><?= $info->numero_empleado ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Puesto: </th>
                        <td colspan="2"><?= $info->descripcion ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Departamento: </th>
                        <td colspan="2"><?= $info->departamento ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Macroproceso: </th>
                        <td colspan="2"><?= $info->macroproceso ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nivel de Departamento: </th>
                        <td colspan="2"><?= $info->nivel ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Proceso: </th>
                        <td colspan="2"><?= $info->proceso ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>