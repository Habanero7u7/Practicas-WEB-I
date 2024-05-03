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
        <h1>Cadenas</h1>
    </header>
    

    <nav>
     <h2>Practicas PHP</h2>
        <ul>
            <li><a href="/Paginas/PHP.html">Regresar a las paginas</a></li> 
        </ul>
     </nav>

     <h1>Leer cadena</h1>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <label for="cadena">Introduce la cadena:</label>
     <input type="text" name="cadena" id="cadena">
     <input type="submit" value="Procesar">
     </form>
     
     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadena = $_POST["cadena"];

    // la convierta a mayúsculas y elimine los espacios sobrantes al inicio, al final y entre cadenas.
    $cadenaProcesada = strtoupper(trim(preg_replace('/\s+/', ' ', $cadena)));

    echo "Cadena original: $cadena <br>";
    echo "Cadena convertida: $cadenaProcesada";
}
?>

    <footer>
        <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
    </footer>

</body>
</html>
