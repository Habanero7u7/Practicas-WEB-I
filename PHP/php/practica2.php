<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA PHP</title>
    <link rel="stylesheet" href="/Css/Style.css">
</head>

<body>
    <header>
        <h1>ASCII</h1>
    </header>
    

    <nav>
     <h2>Practicas PHP</h2>
        <ul>
            <li><a href="/Paginas/PHP.html">Regresar a las paginas</a></li> 
        </ul>
     </nav>

     <h1>Ascii</h1>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <label for="maximo">Ingrese el valor máximo, recuerde el rango 32 al 127:</label>
     <input type="text" name="maximo" id="maximo">
     <input type="submit" value="Mostrar">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maximo = $_POST["maximo"];

    if (is_numeric($maximo) && $maximo >= 32 && $maximo <= 127) {
        echo "<table border='1'>";
        echo "<tr><th> su valor</th><th> El caracter ASCII</th></tr>";
        
        for ($i = 32; $i <= $maximo; $i++) {
            $caracter = chr($i);
            echo "<tr><td>$i</td><td>$caracter</td></tr>";
        }
        
        echo "</table>";
    } else {
        echo "El valor introducido no es válido.";
    }
}
?>

    <footer>
        <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
    </footer>

</body>
</html>
