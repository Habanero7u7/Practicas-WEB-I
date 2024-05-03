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

//1.- Conexión al servidor de bases de datos, interface OOP
$link = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if ($link->connect_error) {
	echo "Fallo al conectar: " . $link->connect_error;
}

//2.- obteniendo los datos del formulario
$clave = $_REQUEST["clave"];
$nombre = $_REQUEST["nombre"];
$direccion = $_REQUEST["direccion"];
$telefono = $_REQUEST["telefono"];

//validando los campos
if (isset($clave) && isset($nombre) && isset($direccion) && isset($telefono)) {
	//creando la consulta
	$sql = "INSERT INTO usuarios (clave, nombre, dir, telefono) " .
		"VALUES ($clave, '$nombre', '$direccion', '$telefono')";
	//echo $sql;
	//4.- ejecutando la consulta
	$result = $link->query($sql);

	//5.- validando la consulta
	if ($link->affected_rows > 0) {

		echo "La informaci&oacute;n se ha insertado con &eacute;xito.\n";
	} else {
		die('Consulta no v&aacute;lida: ' . $link->error);
	}
	$link->close();
} else {
	echo "Debes llenar todos los datos \n";
}
?>
        <footer>
            <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
        </footer>

    </body>
</html>