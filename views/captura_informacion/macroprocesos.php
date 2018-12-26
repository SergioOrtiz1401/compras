<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="text-center">Registrar Macroprocesos</h3>
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
        campo = '<div class="form-row macroproceso_'+nextinput +'">' +
            '<label for="macroprocesos" class="col-sm-2 col-form-label">Macroproceso '+nextinput +':</label>' +
            '<div class="col-sm-5">' +
            '<input type="text" class="form-control" name="macroprocesos[]" id="macroprocesos" placeholder="Nombre Macroproceso">' +
            '</div>' +
            '</div>';
        $("#campos").append(campo);
    }
</script>
    <script type="text/javascript">
        function eliminarRegistro(macroproceso) {
            $.ajax({
                url: 'eliminar_registro_actual',
                data: {id_registro:macroproceso,registro:'macroproceso'},
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                        $('.registros_actuales').hide();
                    },
            });
        }
    </script>
</div>
<a href="#" class="ver_registros" data-registro="macroproceso" style="padding-left: 5%">Ver registros actuales</a>
<div class="registros_actuales" style="padding-left: 5%;padding-right: 20%"></div>
