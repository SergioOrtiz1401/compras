<html lang="es">

<body>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">

            <form name="form1" id="form1" method="post" enctype="multipart/form-data">

                <h4 class="text-center">Importar imagenes de Empleados</h4>

                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
                    </div>

                    <button type="submit" class="btn btn-primary" name="botton">Cargar</button>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['botton'])) {
    foreach ($_FILES["archivo"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if (@$_FILES["archivo"]["name"][$key]) {
            @$filename = @$_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
            @$source = @$_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio = 'C:/xampp/htdocs/administrador_empleado/img/imagen_empleado'; //Declaramos un  variable con la ruta donde guardaremos los archivos

            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio)) {
                mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir = opendir($directorio); //Abrimos el directorio de destino
            $target_path = $directorio . '/' . $filename; //Indicamos la ruta de destino, así como el nombre del archivo

            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source, $target_path)) {
            }
            closedir($dir); //Cerramos el directorio de destino
        }
    }
}
?>