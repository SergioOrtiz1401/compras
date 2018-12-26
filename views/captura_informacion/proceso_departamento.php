<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="text-center">Registrar Proceso de Departamento</h3>
        </div>
    </div>
</div>
<div class="contenedor_imagen">
    <br/>
<a href="#" onclick="AgregarCampos()" style="padding-left: 5%">agregar campo(s) para guardar</a>
<form method="post" style="padding-left: 5%; margin-right: 1%">
    <div id="campos">

    </div>
    <button type="submit" class="btn btn-primary guardar_departamento">Guardar</button>
    <br/>
    <br/>
    <br/>
    <br/>
</form>
<script type="text/javascript">
    var nextinput = 0;
    function AgregarCampos(){
        nextinput++;
        campo = '<div class="form-row proceso_departamento_'+nextinput +'">' +
            '<label for="proceso_departamento" class="col-sm-2 col-form-label">Macroproceso '+nextinput +':</label>' +
            '<div class="col-sm-5">' +
            '<input type="text" class="form-control" name="proceso_departamento[]" id="proceso_departamento" placeholder="Nombre del Proceso">' +
            '</div>' +
            '</div>';
        $("#campos").append(campo);
    }
</script>
    <script type="text/javascript">
        function eliminarRegistro(procesodepartamento) {
            $.ajax({
                url: 'eliminar_registro_actual',
                data: {id_registro:procesodepartamento,registro:'proceso_departamento'},
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    $('.registros_actuales').hide();
                },
            });
        }
    </script>
</div>
<a href="#" class="ver_registros" data-registro="proceso_departamento" style="padding-left: 5%">Ver registros actuales</a>
<div class="registros_actuales" style="padding-left: 5%;padding-right: 20%"></div>