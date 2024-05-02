<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>4</h1>
    </header>
    

     <nav>
        <ul>
     <a href="index.html">Regresar a las paginas</a> 
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
        <p>Alexa Darlin Nandi de la Rosa 22110138</p>
    </footer>


</body>
</html>
