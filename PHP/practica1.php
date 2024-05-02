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
        <h1>1</h1>
    </header>
    

     <nav>
        <ul>
     <a href="index.html">Regresar a las paginas</a> 
        </ul>
     </nav>

     <h1>Introducir cantidad</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table border="1">
        <tr>
            <th>producto</th>
            <th>Precio unitario ($)</th>
            <th>Cantidad</th>
        </tr>
        <?php
        
        $productos = array(
            " 1" => 30,
            " 2" => 55,
            " 3" => 48
        );
        
        foreach ($productos as $producto => $precio) {
            echo "<tr>";
            echo "<td>$producto</td>";
            echo "<td>$precio</td>";
            echo "<td><input type='text' name='cantidad[$producto]' size='5'></td>";
            echo "</tr>";
        }

        ?>
    </table>

    <br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = 0;
    $iva = 0.16; // 16% de IVA

    foreach ($_POST['cantidad'] as $producto => $cantidad) {
        if (!empty($cantidad) && is_numeric($cantidad)) {
            $subtotal = $cantidad * $productos[$producto];
            $total += $subtotal;
            echo "Subtotal de $producto: $" . number_format($subtotal, 2) . "<br>";
        }
    }

    $ivaTotal = $total * $iva;
    $totalConIVA = $total + $ivaTotal;

    echo "<br>";
    echo "Total de la venta: $" . number_format($total, 2) . "<br>";
    echo "su IVA (16%): $" . number_format($ivaTotal, 2) . "<br>";
    echo "Total ya con IVA: $" . number_format($totalConIVA, 2);
}
?>


 
    <footer>
        <p>Alexa Darlin Nandi de la Rosa 22110138</p>
    </footer>


</body>
</html>
