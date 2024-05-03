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
            <h2>Buscar Usuario</h2>
            <ul>
                <li><a href="/PHP/CRUD/usuarios.php">Regresar</a></li> 
            </ul>
         </nav>

         <div id="contenido">
            <p>El usuario es:</p>

            <?php

            include '../conexion.php';

            ///1.- Conexión al servidor de bases de datos interface procedimental
            $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
            if (mysqli_connect_errno())
                    echo "Fallo al conectar: " . mysqli_error ($link);
            
            $clave = $_REQUEST["clave"];

            if (isset($clave)) {

                $sql = "select * from usuarios where clave = $clave";

                $result = mysqli_query($link,$sql);

                if (!$result) {
                    die('Consulta no v&aacute;lida: ' . mysqli_error($link));
                } else {
                    if (mysqli_affected_rows($link) > 0) {

                        echo "<table border = '1'> \n";
                        echo "<tr><td>Clave</td><td>Nombre</td><td>Direcci&oacute;n</td><td>Telefono</td></tr> \n";

                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr><td>$clave</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n";
                        }

                        echo "</table>\n";
                    } else {
                        echo "<p> El dato no existe </p>";
                    }
                }
            }
            mysqli_close($link);
            
            ?>

</div>
            
<footer>            
    <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
</footer>

    </body>
</html>