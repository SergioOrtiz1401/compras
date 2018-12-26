<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3 class="text-center">Registrar Puestos</h3>
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
        campo = '<div class="form-row siglas_'+nextinput +'">' +
            '<label for="siglas" class="col-sm-2 col-form-label">Puesto '+nextinput +':</label>' +
            '<div class="col-sm-4">' +
            '<input type="text" class="form-control" name="siglas[]" id="siglas" placeholder="Iniciales">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '<input type="text" class="form-control" name="descripcion[]" id="descripcion" placeholder="Nombre Completo">' +
            '</div>' +
            '</div>';
        $("#campos").append(campo);
    }
</script>
    <script type="text/javascript">
        function eliminarRegistro(puesto) {
            $.ajax({
                url: 'eliminar_registro_actual',
                data: {id_registro:puesto,registro:'puesto'},
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    $('.registros_actuales').hide();
                },
            });
        }
    </script>
</div>
<a href="#" class="ver_registros" data-registro="puesto" style="padding-left: 5%">Ver registros actuales</a>
<div class="registros_actuales" style="padding-left: 5%;padding-right: 20%"></div>