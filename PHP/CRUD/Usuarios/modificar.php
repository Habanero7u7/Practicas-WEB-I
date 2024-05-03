<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP y MySQL</title>
        <link href="/Css/Style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <header>
            <h1>Practica CRUD</h1>
        </header>
        
         <nav>
            <h2>Modificar Usuario</h2>
            <ul>
                <li><a href="/PHP/CRUD/usuarios.php">Regresar</a></li> 
            </ul>
         </nav>

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

        <footer>
            <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
        </footer>
        
    </body>
</html>