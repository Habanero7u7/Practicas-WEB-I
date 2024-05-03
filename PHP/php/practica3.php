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
        <h1>Convertidor</h1>
    </header>
    

    <nav>
     <h2>Practicas PHP</h2>
        <ul>
            <li><a href="/Paginas/PHP.html">Regresar a las paginas</a></li> 
        </ul>
     </nav>

     <h1>Grados</h1>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <label for="temperatura">Grados</label>
     <input type="text" name="temperatura" id="temperatura">

     <label for="unidad_origen">
     <select name="unidad_origen" id="unidad_origen">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
     </select>

     <label for="unidad_destino">A:</label>
     <select name="unidad_destino" id="unidad_destino">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
     </select>

     <input type="submit" value="Convertir">
     </form>


     <?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

function fahrenheitToKelvin($fahrenheit) {
    return ($fahrenheit + 459.67) * 5/9;
}

function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}

function kelvinToFahrenheit($kelvin) {
    return ($kelvin * 9/5) - 459.67;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperatura = $_POST["temperatura"];
    $unidad_origen = $_POST["unidad_origen"];
    $unidad_destino = $_POST["unidad_destino"];
    $resultado = 0;

    if ($unidad_origen == "celsius") {
        if ($unidad_destino == "fahrenheit") {
            $resultado = celsiusToFahrenheit($temperatura);
        } elseif ($unidad_destino == "kelvin") {
            $resultado = celsiusToKelvin($temperatura);
        }
    } elseif ($unidad_origen == "fahrenheit") {
        if ($unidad_destino == "celsius") {
            $resultado = fahrenheitToCelsius($temperatura);
        } elseif ($unidad_destino == "kelvin") {
            $resultado = fahrenheitToKelvin($temperatura);
        }
    } elseif ($unidad_origen == "kelvin") {
        if ($unidad_destino == "celsius") {
            $resultado = kelvinToCelsius($temperatura);
        } elseif ($unidad_destino == "fahrenheit") {
            $resultado = kelvinToFahrenheit($temperatura);
        }
    }

    echo "su resultado es: $resultado $unidad_destino";
}
?>
    
    <footer>
        <h2>Creado por Fabian Navarro --- CETI --- 5°N ---</h2>
    </footer>
  
</body>
</html>
