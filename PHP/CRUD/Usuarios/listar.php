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
            <h2>Listar Usuario</h2>
            <ul>
                <li><a href="/PHP/CRUD/usuarios.php">Regresar</a></li> 
            </ul>
         </nav>

        <div id="contenido">
            <p>Listado completo de registros:</p>
            <?php

include '../conexion.php';

//1.- Conexión al servidor de bases de datos interface procedimental
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
	echo "Fallo al conectar: " . mysqli_error($link);
}

$sql = "SELECT * from usuarios";
//echo $sql;

$result = mysqli_query($link, $sql);

if (!$result) {
	die('Consulta no v&aacute;lida: ' . mysqli_error($link));
} else {

	echo "<table border = '1'> \n";
	echo "<tr><th>Clave</th><th>Nombre</th><th>Direcci&oacute;n</th><th>Telefono</th></tr> \n";
	while ($row = mysqli_fetch_row($result)) {
		$clave = $row[0];
		echo "<tr><td>$clave</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a href=borrar1.php?clave=$clave>borrar</a></td><td><a href=modificar1.php?clave=$clave>modificar</a></td></tr> \n";
		echo $clave;
	}
	echo "</table>\n";
}

mysqli_close($link);
?>
        <footer>
            <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
        </footer>
        
    </body>
</html>