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
            <h2>Borrar Usuario</h2>
            <ul>
                <li><a href="/PHP/CRUD/usuarios.php">Regresar</a></li> 
            </ul>
         </nav>
         
    <form action="borrar.php" method="get">
        <p>Escriba los datos del registro a borrar:</p>
        <table>
            <tbody>
                <?php
                                include '../conexion.php';
                                $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
                                if (mysqli_connect_errno()) {
                                    echo "Fallo al conectar: " . mysqli_error($link);
                                }
                               $valor =$_REQUEST['clave']; 
                               $sql = "SELECT * from usuarios where clave=$valor";
                               $result = mysqli_query($link, $sql);
                               $row = mysqli_fetch_row($result)
                            ?>
                <tr>
                    <td>Clave:</td>
                    <td>
                        <input type="text" name="clave" size="40" value=<?=$valor?>  maxlength="10" />
                    </td>
                </tr>
                <tr>
                 <td>Nombre:</td>
                            <td><input type="text" name="nombre" value=<?=$row[1]?> size="40" maxlength="40" /></td>
                        </tr>
                        <tr>
                            <td>Direcci&oacute;n:</td>
                            <td><input type="text" name="direccion" value=<?=$row[2]?> size="60" maxlength="60" /></td>
                            <td>Telefono</td>
                            <td><input type="text" name="telefono" value=<?=$row[3]?> size="15" maxlength="15" /></td>
                        </tr>
            </tbody>
        </table>
        <p>
            <input type="submit" value="borrar" />
        </p>
    </form>
    <?php
       mysqli_close($link);
    ?>
        <footer>
            <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
        </footer>
</body>

</html>