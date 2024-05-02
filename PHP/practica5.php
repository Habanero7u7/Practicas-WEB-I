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
        <h1>5</h1>
    </header>
    

     <nav>
        <ul>
     <a href="index.html">Regresar a las paginas</a> 
        </ul>
     </nav>

     <h1>Simulacion</h1>
     <h2>Registro de usuario</h2>

     <form method="post" action="practica5.php">
    <label for="nombre_usuario">Nombre de Usuario:</label>
    <input type="text" name="nombre_usuario" id="nombre_usuario" required><br>

    <label for="nombre_completo">Nombre Completo:</label>
    <input type="text" name="nombre_completo" id="nombre_completo" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required><br>

    <label for="confirm_password">Repetir Contraseña:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" name="email" id="email" required><br>

    <label>Sexo:</label>
    <input type="radio" name="sexo" value="masculino" id="sexo_masculino" required>
    <label for="sexo_masculino">Masculino</label>
    <input type="radio" name="sexo" value="femenino" id="sexo_femenino" required>
    <label for="sexo_femenino">Femenino</label><br>

    <label>Hobbies:</label><br>
    <input type="checkbox" name="hobbies[]" value="Deporte">Deporte<br>
    <input type="checkbox" name="hobbies[]" value="Leer">Leer<br>
    <input type="checkbox" name="hobbies[]" value="dormir">dormir<br>

    <label for="estado_civil">Estado Civil:</label>
    <select name="estado_civil" id="estado_civil" required>
        <option value="soltero">Soltero/a</option>
        <option value="casado">Casado/a</option>
        <option value="divorciado">Divorciado/a</option>
        <option value="viudo">Viudo/a</option>
        <option value="union_libre">union libre</option>
    </select><br>

    <label for="calle">Calle:</label>
    <input type="text" name="calle" id="calle" required><br>

    <label for="numero_interior">Número Interior:</label>
    <input type="text" name="numero_interior" id="numero_interior" required><br>

    <label for="colonia">Colonia:</label>
    <input type="text" name="colonia" id="colonia" required><br>

    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado" required><br>

    <label for="pais">País:</label>
    <input type="text" name="pais" id="pais" required><br>

    <label for="cp">Código Postal:</label>
    <input type="text" name="cp" id="cp" required><br>

    <input type="submit" value="Registrarse">
</form>

<?php
$errores = array();

// Validar campos
if (empty($_POST["nombre_usuario"])) {
    $errores[] = "Nombre de Usuario es requerido.";
}

if (empty($_POST["nombre_completo"])) {
    $errores[] = "Nombre Completo es requerido.";
}

if (empty($_POST["password"])) {
    $errores[] = "Contraseña es requerida.";
} else if ($_POST["password"] != $_POST["confirm_password"]) {
    $errores[] = "Las contraseñas no coinciden.";
}

if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Correo Electrónico inválido.";
}

if (empty($_POST["sexo"])) {
    $errores[] = "Sexo es requerido.";
}

if (empty($_POST["hobbies"])) {
    $errores[] = "Hobbies es requerido.";
}

if (empty($_POST["estado_civil"])) {
    $errores[] = "Estado Civil es requerido.";
}

if (empty($_POST["calle"])) {
    $errores[] = "Calle es requerida.";
}

if (empty($_POST["numero_interior"])) {
    $errores[] = "Número Interior es requerido.";
}

if (empty($_POST["colonia"])) {
    $errores[] = "Colonia es requerida.";
}

if (empty($_POST["estado"])) {
    $errores[] = "Estado es requerido.";
}

if (empty($_POST["pais"])) {
    $errores[] = "País es requerido.";
}

if (empty($_POST["cp"]) || !is_numeric($_POST["cp"])) {
    $errores[] = "Código Postal es inválido.";
}

// Mostrar errores
if (!empty($errores)) {
    echo "<p>se encontraron estos errores</p>";
    echo "<ul>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else {
    // Mostrar datos en forma de tabla
    echo "<table border='1'>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    foreach ($_POST as $campo => $valor) {
        $campo = str_replace("_", " ", $campo);
        echo "<tr><td>$campo</td><td>";
        if (is_array($valor)) {
            // Si el valor es un array, significa que es un campo de checkbox
            echo implode(", ", $valor);
        } elseif (is_string($valor)) {
            // Si es una cadena de texto, simplemente imprímela
            echo $valor;
        } else {
            echo "Valor no Valido";
        }
        echo "</td></tr>";
    }
    echo "</table>";
}
?>

     
    <footer>
        <p>Alexa Darlin Nandi de la Rosa 22110138</p>
    </footer>


</body>
</html>
