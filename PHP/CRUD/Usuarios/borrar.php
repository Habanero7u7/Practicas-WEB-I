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
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
	echo "Fallo al conectar: " . mysqli_error($link);
}

//validando los campos
$clave = $_REQUEST["clave"];
echo $clave;

if (isset($clave)) {
	$sql = "delete from usuarios where clave = $clave";
	//echo $sql;
	$result = mysqli_query($link, $sql);

	if (mysqli_affected_rows($link) > 0) {
		echo " La informaci&oacute;n se ha borrado.\n";
	} else {
		die(' Consulta no v&aacute;lida: ' . mysqli_error($link));
	}
}

mysqli_close($link);
?>
        <footer>
            <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
        </footer>

    </body>
</html>