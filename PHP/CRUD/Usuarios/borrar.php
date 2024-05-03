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
		echo "La informaci&oacute;n se ha borrado.\n";
	} else {
		die('Consulta no v&aacute;lida: ' . mysqli_error($link));
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