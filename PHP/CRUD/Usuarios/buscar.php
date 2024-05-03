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
        </div>

        <div id="contenido">

            <?php
            include '../conexion.php';

            ///1.- Conexión al servidor de bases de datos interface procedimental
            $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
            if (mysqli_connect_errno())
                    echo "Fallo al conectar: " . mysqli_error ($link);
            
            $clave = $_REQUEST["clave"];

            if (isset($clave)) {

                $sql = "select * from usuarios where clave = $clave";
                //echo $sql;

                $result = mysqli_query($link,$sql);


                if (!$result) {
                    die('Consulta no v&aacute;lida: ' . mysqli_error($link));
                } else {
                    if (mysqli_affected_rows($link) > 0) {

                        echo "<table border = '1'> \n";
                        echo "<tr><td>Clave</td><td>Nombre</td><td>Direcci&oacute;n</td><td>Telefono</td></tr> \n";

                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n";
                        }
                    } else {

                        echo "<p> El dato no existe </p>";
                    }
                }
            }
            mysqli_close($link);
            
            ?>
        </div>

        <div id="pie">
            <h2>Todos los derechos reservados</h2>
        </div>
    </body>
</html>