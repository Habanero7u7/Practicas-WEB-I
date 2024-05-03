<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bases de datos y MySQL - Inicio</title>
        <link href="../css/comun.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="encabezado">
            <h1>Bases de datos y MySQL - Inicio</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="../usuarios.php">P&aacute;gina inicial</a></li>
            </ul>
            <?php
            include '../conexion.php';

           //1.- Conexión al servidor de bases de datos interface procedimental
            $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
            if (mysqli_connect_errno())
                    echo "Fallo al conectar: " . mysqli_error ($link);
            
            //obteniendo los datos del formulario
            $clave = $_REQUEST["clave"];
            $nombre = $_REQUEST["nombre"];
            $direccion = $_REQUEST["direccion"];
            $telefono = $_REQUEST["telefono"];
           
            //validando los campos
            if (isset($clave) && isset($nombre) && isset($direccion) && isset($telefono)) {

                //creando la consulta
                $sql = "UPDATE usuarios SET nombre = '$nombre' , dir = '$direccion'," .
                        " telefono = '$telefono' where clave = $clave";
                //echo $sql;
                //ejecutando la consulta
                $result = mysqli_query($link,$sql);

                //validando la consulta
                if (mysqli_affected_rows($link) > 0) {

                    echo "La informaci&oacute;n se ha actualizado.\n";
                } else {
                    die('Consulta no v&aacute;lida: ' . mysqli_error(mysql: $mysql));
                }
                mysqli_close($link);
            } else {
                echo "Debes llenar todos los datos \n";
            }
            ?>
        </div>

        <div id="contenido">
        </div>
        <div id="pie">
            <h2>Todos los derechos reservados</h2>
        </div>
    </body>
</html>